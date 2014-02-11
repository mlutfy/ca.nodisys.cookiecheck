<?php

function cookiecheck_civicrm_buildForm($formName, &$form) {
  $check_forms = array(
    'CRM_Contribute_Form_Contribution_Main',
    'CRM_PCP_Form_PCPAccount',
    // TODO: civievent, etc ?
  );

  if (in_array($formName, $check_forms)) {
    CRM_Core_Resources::singleton()->addScriptFile('ca.nodisys.cookiecheck', 'cookiecheck.js');

    if (empty($_COOKIE)) {
      if ((! isset($_REQUEST['cookieredirect'])) && $_REQUEST['cookieredirect'] = 1) {
        $options = array(
          'query' => $_REQUEST,
        );

        // Unset the CiviCRM IDS variables, clutter
        foreach ($options['query'] as $key => $val) {
          if (substr($key, 0, 3) == 'IDS') {
            unset($options['query'][$key]);
          }
        }

        // To avoid loops if cookies really are disabled
        $options['query']['cookieredirect'] = 1;

        // Remove language prefix from URL, because Drupal prefers without
        $url = $_SERVER['SCRIPT_URL'];
        $url = preg_replace('/^\/..\/(civicrm.*)$/', '\1', $url);

        // FIXME use civi method
        drupal_goto($url, $options);
      }
      else {
        drupal_set_message(t("This page requires cookies to be enabled in your browser settings. Please check this setting and enable cookies (if they are not enabled). Then refresh this page. If this error persists, contact the site administrator for assistance."), 'error');
      }
    }
  }
}
