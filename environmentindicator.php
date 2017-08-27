<?php

require_once 'environmentindicator.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function environmentindicator_civicrm_config(&$config) {
  _environmentindicator_civix_civicrm_config($config);

  CRM_Core_Resources::singleton()->addScriptFile('contrib.environmentindicator', 'js/environmentindicator.js');
}

