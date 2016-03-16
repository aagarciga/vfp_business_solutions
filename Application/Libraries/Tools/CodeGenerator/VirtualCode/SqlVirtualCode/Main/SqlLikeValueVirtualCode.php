<?php
/**
 * Created by PhpStorm.
 * User: Princesa
 * Date: 03/02/2016
 * Time: 19:23
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\SqlVirtualCode;

class SqlLikeValueVirtualCode extends SqlVirtualCode
{
    /**
     * SqlLikeValueVirtualCode constructor.
     * @param string $stringValue
     */
    public function __construct($stringValue)
    {
       $stringValue = SqlLikeValueVirtualCode::escapeValue(array(
           '%' => '@%',
           '@' => '@@',
           '\'' => '@\'',
       ), $stringValue);
        $stringValue = "'%$stringValue%' ESCAPE '@'";
        parent::__construct($stringValue);
    }

    private static function escapeValue($pattern, $stringValue){
        $result = "";
        $find = false;

        $length = strlen($stringValue);
        for ($i=0; $i < $length;){
            foreach ($pattern as $patternKey => $replacement){
                if (strpos($patternKey, $stringValue, $i)){
                    $result .= $replacement;
                    $find = true;
                    $i += strlen($patternKey);
                    break;
                }
            }
            if (!$find){
                $result .= $stringValue[$i];
                $i++;
            }
            $find = false;
        }
        return $result;
    }
}