<?php
/**
 * User: Victor
 * Date: 25/01/2016
 * Time: 14:30
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;


interface IFilterNode
{
    /**
     * @param IFilterReport $report
     * @return mixed
     */
    function checkSemantic($report);

    /**
     * @param ICodeGenerator $codeGenerator
     * @return mixed
     */
    function generateSqlCode($codeGenerator);

    /**
     * @param ICodeGenerator $codeGenerator
     * @return mixed
     */
    function generateHtmlCode($codeGenerator);
}