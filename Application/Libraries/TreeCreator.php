<?php
/**
 * User: Victor
 * Date: 26/02/2016
 * Time: 19:04
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion;

use Dandelion\Tools\Filter\BlockExpressionNode;
use Dandelion\Tools\Filter\DateNode;
use Dandelion\Tools\Filter\DateRangeComparisonOperatorNode;
use Dandelion\Tools\Filter\FieldNode;
use Dandelion\Tools\Filter\IFilterNode;
use Dandelion\Tools\Filter\LikeNode;
use Dandelion\Tools\Filter\NotNode;
use Dandelion\Tools\Filter\PositiveNode;
use Dandelion\Tools\Filter\StringNode;

define('TYPE_NAME', 'nodeType');

define('VALUE_NAME', 'nodeValue');

define('CHILDREN_NAME', 'nodeChildren');

define('NAMESPACE_PREFIX_CREATOR', "\\" . __NAMESPACE__ . "\\");

class TreeCreator
{
    private static $types;

    public  static  function Init(){
        self::$types  = array(
            'blockExpression' => 'blockExpressionCreator', // un tipo para llamar un una funcion. callback creator. nodo principal. Root que es block Expression
            'field' => 'fieldCreator',
            'string' => 'stringCreator',
            'date' => 'dateCreator',
            'like' => 'likeCreator',
            'not' => 'notCreator',
            'positive' => 'positiveCreator',
            'dateRange' => 'dateRangeCreator'
        );
    }

    private static function getProperty($obj, $property){
        return $obj->$property;
    }

    private static function isSetProperty($obj, $property){
        return isset($obj->$property);
    }

    /**
     * @param \stdClass $stdTree
     * @return IFilterNode
     */
    public static function createTree($stdTree){
        $result = self::createTreePrivate($stdTree);

        if (is_null($result)){
            return new BlockExpressionNode();
        }

        return $result;
    }

    private static function createTreePrivate($arrayTree){
        if (is_null($arrayTree) || !self::isSetProperty($arrayTree, TYPE_NAME)|| !self::isSetProperty($arrayTree, VALUE_NAME) || !self::isSetProperty($arrayTree, CHILDREN_NAME)){
            return null;
        }

        $type = self::getProperty($arrayTree, TYPE_NAME);
        $value = self::getProperty($arrayTree, VALUE_NAME);
        $childrenArray = self::getProperty($arrayTree, CHILDREN_NAME);

        $node = self::createNodeByType($type);

        foreach($childrenArray as $childArray){
            $child = self::createTree($childArray);
            if (is_null($child)){
                return null;
            }

            $node->addChild($child);
        }

        $node->setValue($value);

        return $node;
    }

    /**
     * @param string $type
     * @return IFilterNode
     */
    protected static function createNodeByType($type){

        if (array_key_exists($type, self::$types)) {
            $creator = NAMESPACE_PREFIX_CREATOR . self::$types[$type];
            return $creator();
        }

        return defaultCreator();
    }

    public static function treeToArray($tree){
        $phpTypes = self::invertCreatorType(); // pone los key como values y viceversa.

        $result = array();

        $nodePhpType = get_class($tree);
        if (!array_key_exists($nodePhpType, $phpTypes)){
            throw new \Exception("Pal, firts at all: You must do TreeCreator Init. If not... Find the error place."); //TODO: Papa
        }
        $result[TYPE_NAME] = $phpTypes[$nodePhpType];

        $result[VALUE_NAME] = $tree->getValue();

        $children = array();
        $childCount = $tree->getChildCount();
        for ($i = 0; $i < $childCount; $i++){
            $children[] = self::treeToArray($tree->getChild($i));
        }

        $result[CHILDREN_NAME] = $children;

        return $result;
    }

    private static function invertCreatorType(){
        $phpType = array();

        foreach (self::$types as $type => $creator){
            $creator = NAMESPACE_PREFIX_CREATOR . $creator;
            $node = $creator();
            $phpType[get_class($node)] = $type;
        }

        return $phpType;
    }
}

function defaultCreator(){
    return null;
}

function blockExpressionCreator(){
    return new BlockExpressionNode();
}

function fieldCreator(){
    return new FieldNode();
}

function stringCreator(){
    return new StringNode();
}

function dateCreator(){
    return new DateNode();
}

function likeCreator(){
    return new LikeNode();
}

function notCreator(){
    return new NotNode();
}

function positiveCreator(){
    return new PositiveNode();
}

function dateRangeCreator(){
    return new DateRangeComparisonOperatorNode();
}