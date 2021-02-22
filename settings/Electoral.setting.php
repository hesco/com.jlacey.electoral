<?php

/*
 * Settings metadata file
 */
return [
  'electoralApiProviders' => [
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'electoralApiProviders',
    'type' => 'Select',
    'default' => NULL,
    'add' => '5.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Select the services you wish to use to provide data.',
    'html_type' => 'select',
    'html_attributes' => [
      'multiple' => 1,
      'class' => 'huge crm-select2',
    ],
    'pseudoconstant' => ['optionGroupName' => 'electoral_api_data_providers'],
    'title' => ts('Data Provider(s)'),
  ],
  'ciceroAPIKey' => [
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'ciceroAPIKey',
    'type' => 'Text',
    'default' => '',
    'add' => '5.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Cicero API Key',
    'help_text' => 'Add your registered Cicero API Key',
    'html_type' => 'text',
    'title' => ts('Cicero API Key'),
  ],
  'googleCivicInformationAPIKey' => [
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'googleCivicInformationAPIKey',
    'type' => 'Text',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Google Civic API Key',
    'help_text' => 'Add your registered Google Civic Information API Key',
    'html_type' => 'text',
    'title' => ts('Google Civic Information API Key'),
  ],
  'proPublicaCongressAPIKey' => [
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'proPublicaCongressAPIKey',
    'type' => 'Text',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'ProPublica Congress API Key',
    'help_text' => 'Add your registered ProPublica Congress API Key',
    'html_type' => 'text',
    'title' => ts('ProPublica Congress API Key'),
  ],
  'addressLocationType' => [
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'addressLocationType',
    'type' => 'Integer',
    'default' => '1',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Address location',
    'help_text' => 'Select the address location type to use when looking up a contact\'s districts.',
    'html_type' => 'select',
    'title' => ts('Address location for district lookup'),
    'pseudoconstant' => [
      'callback' => 'CRM_Admin_Form_Setting_Electoral::getLocationTypes',
    ],
  ],
  'includedStatesProvinces' => [
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'includedStatesProvinces',
    'type' => 'Array',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'States and Provinces included in electoral district lookups',
    'help_text' => 'Add states and provinces to include in electoral district lookups',
    'html_type' => 'select',
    'html_attributes' => [
      'multiple' => 1,
      'class' => 'huge crm-select2',
    ],
    'title' => ts('States'),
    'pseudoconstant' => [
      'callback' => 'CRM_Core_PseudoConstant::stateProvince',
    ],
  ],
  'includedCounties' => [
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'includedCounties',
    'type' => 'Array',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Counties included in electoral district lookups',
    'help_text' => 'Add counties to include in electoral district lookups',
    'html_type' => 'select',
    'html_attributes' => [
      'multiple' => 1,
      'class' => 'huge crm-select2',
      'data-callback' => 'civicrm/ajax/jqCounty',
    ],
    'title' => ts('Counties'),
  ],
  'allCounties' => [
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'allCounties',
    'type' => 'Boolean',
    'default' => '',
    'add' => '5.25',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Include all counties in electoral district lookups',
    'help_text' => 'Include all counties in electoral district lookups',
    'html_type' => 'checkbox',
    'title' => ts('All Counties'),
  ],
  'includedCities' => [
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'includedCities',
    'type' => 'Array',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Cities included in electoral district lookups',
    'help_text' => 'Add cities, comma separated, to include in electoral district lookups',
    'html_type' => 'text',
    'title' => ts('Cities'),
  ],
];
