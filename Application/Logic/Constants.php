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