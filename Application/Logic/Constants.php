<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

define('DEFAULT_SESSION_FILTER_ID', 'SESSION_FILTER');

/**
 * Global Definitions
 */
define("GLOBAL_DEFAULT_DATE_FORMAT", 'Y-m-d');

/**
 * Model Types Definitions
 */
define("MODEL_TYPE_STRING", 'character');
define("MODEL_TYPE_DATE", 'date');
define("MODEL_TYPE_DATE_DEFAULT", '1899-12-30');
define("MODEL_TYPE_MEMO", 'memo');
define("MODEL_TYPE_DATE_RANGE", 'daterange');
define("MODEL_TYPE_DICTIONARY", 'dropdown');
define("MODEL_TYPE_LINK", 'link'); // TODO: Instead href preventing issues
define("MODEL_TYPE_DEFAULT", MODEL_TYPE_STRING);

/**
 * JavaScript Types Definitions
 */
define("JS_TYPE_STRING", 'text');
define("JS_TYPE_DATE", MODEL_TYPE_DATE);
define("JS_TYPE_DATE_RANGE", MODEL_TYPE_DATE_RANGE);
define("JS_TYPE_DICTIONARY", MODEL_TYPE_DICTIONARY);

/**
 * ViewModel's Field Definition Attributes
 */
define("FIELD_ATTR_TYPE", 'type');
define("FIELD_ATTR_NAME", 'name');
define("FIELD_ATTR_DISPLAY_NAME", 'displayName');
define("FIELD_ATTR_VALUES", 'values');
define("FIELD_ATTR_HAVE_VALUES", 'haveValues');
define('FIELD_ATTR_EDITABLE', 'editable');
define('FIELD_ATTR_FILTERABLE', 'filterable');
define("FIELD_ATTR_VISIBLE", 'visible');
define("FIELD_ATTR_SORTABLE", 'sortable');

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

/**
 * Equipment History Dashboard Status
 */
define('EQUIPMENT_HISTORY_DASHBORD_STATUS_AVAILABLE', 'Available');
define('EQUIPMENT_HISTORY_DASHBORD_STATUS_NOTRETURNED', 'Not Returned');
define('EQUIPMENT_HISTORY_DASHBORD_STATUS_BROKEN', 'Broken');
define('EQUIPMENT_HISTORY_DASHBORD_STATUS_LOST', 'Lost');
define('EQUIPMENT_HISTORY_DASHBORD_STATUS_RECEIVED', 'Received');
define('EQUIPMENT_HISTORY_DASHBORD_STATUS_DEFAULT', EQUIPMENT_HISTORY_DASHBORD_STATUS_NOTRETURNED);