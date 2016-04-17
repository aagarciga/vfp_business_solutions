<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

/**
 * Model Types Definitions
 */
//define("MODEL_TYPE_STRING", strtolower(ADVANTAGE_TYPE_CHARACTER));
define("MODEL_TYPE_STRING", 'character');
//define("MODEL_TYPE_DATE", strtolower(ADVANTAGE_TYPE_DATE));
define("MODEL_TYPE_DATE", 'date');
//define("MODEL_TYPE_MEMO", strtolower(ADVANTAGE_TYPE_MEMO));
define("MODEL_TYPE_MEMO", 'memo');
define("MODEL_TYPE_DATE_RANGE", 'daterange');
define("MODEL_TYPE_DICTIONARY", 'dropdown');
define("MODEL_TYPE_LINK", 'link'); // TODO: Instead href preventing issues
define("MODEL_TYPE_DEFAULT", MODEL_TYPE_STRING);

/**
 * HTML Elements data attributes definition
 */
define('HTML_DATA_ATTR_EDITABLE', 'editable');
define("HTML_DATA_ATTR_VISIBLE", 'visible');

/**
 * Dashboard request params definition
 */
define('DASHBOARD_SESSION_PARAM_USERNAME', 'username');
define('DASHBOARD_SESSION_PARAM_USERNAME_DEFAULT', 'Anonimous');
define('DASHBOARD_SESSION_PARAM_FULLFEATURES', 'fullFeatures');
define('DASHBOARD_SESSION_PARAM_FULLFEATURES_DEFAULT', false);
define('DASHBOARD_SESSION_PARAM_SHOWFINANCIALDASHBOARD', 'showFiancialDashboard');
define('DASHBOARD_SESSION_PARAM_SHOWFINANCIALDASHBOARD_DEFAULT', false);
define('DASHBOARD_SESSION_PARAM_PAGE', 'page');
define('DASHBOARD_SESSION_PARAM_ORDERBY', 'orderby');
define('DASHBOARD_SESSION_PARAM_ORDER', 'order');
define('DASHBOARD_SESSION_PARAM_ITEMSPERPAGE', 'itemsperpage');
