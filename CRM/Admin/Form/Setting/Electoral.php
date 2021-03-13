<?php
/**
 * Form controller class
 *
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC43/QuickForm+Reference
 */
class CRM_Admin_Form_Setting_Electoral extends CRM_Admin_Form_Setting {

  protected $_settings = [
    'electoralApiProviders' => 'Electoral API settings',
    'ciceroAPIKey' => 'Electoral API settings',
    'googleCivicInformationAPIKey' => 'Electoral API settings',
    'addressLocationType' => 'Electoral API settings',
    'includedStatesProvinces' => 'Electoral API settings',
    //'includedCounties' => 'Electoral API settings',
    'includedCities' => 'Electoral API settings',
    'allCounties' => 'Electoral API settings',
    'electoralApiAllStates' => 'Electoral API settings',
    'electoralApiDistrictTypes' => 'Electoral API settings',
    'electoralApiIncludeRedistricted' => 'Electoral API settings',
  ];

  public function buildQuickForm() {
    // This is until metadata-driven chain-selects are solid in core.
    $this->addChainSelect('includedCounties', [
      'control_field' => 'includedStatesProvinces',
      'data-callback' => 'civicrm/ajax/jqCounty',
      'label' => "Counties",
      'data-empty-prompt' => 'Choose state first',
      'data-none-prompt' => '- N/A -',
      'multiple' => TRUE,
      'required' => FALSE,
      'placeholder' => '- none -',
    ]);
    parent::buildQuickForm();
  }

  public function buildForm() {
    // This whole function is until metadata-driven chain-selects are solid in core.
    $this->setDefaultsForMetadataDefinedFields();
    $this->_defaults['includedCounties'] = Civi::settings()->get('includedCounties');
    parent::buildForm();
  }

  /**
   * Return options for the location type field.
   * @return array
   */
  public static function getLocationTypes() {
    $location_types = CRM_Core_PseudoConstant::get('CRM_Core_DAO_Address', 'location_type_id');
    $location_types = ['Primary'] + $location_types;
    return $location_types;
  }

  /**
   * Necessary until metadata-driven chain-select is properly handled in Smarty forms.
   */
  public function postProcess() {
    // This is until metadata-driven chain-selects are solid in core.
    $this->_settings['includedCounties'] = 'Electoral API settings';
    $this->settingsMetadata = \Civi\Core\SettingsMetadata::getMetadata(['name' => array_keys($this->_settings)], NULL, TRUE);
    parent::postProcess();
  }

}
