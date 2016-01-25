<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 25/01/2016
 * Time: 14:47
 */

namespace Dandelion\Filter;


interface IFilterReport
{
    function reportWarning($nodeType, $message);

    function reportError($nodeType, $message);

    function errorCount();

    function getError($index);

    function warningCount();

    function getWarning($index);
}