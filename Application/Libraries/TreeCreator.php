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


use Dandelion\Tools\Filter\BlockExpresionNode;
use Dandelion\Tools\Filter\DateNode;
use Dandelion\Tools\Filter\DateRangeComparisonOperatorNode;
use Dandelion\Tools\Filter\FieldNode;
use Dandelion\Tools\Filter\IFilterNode;
use Dandelion\Tools\Filter\LikeNode;
use Dandelion\Tools\Filter\NotNode;
use Dandelion\Tools\Filter\PositiveNode;
use Dandelion\Tools\Filter\StringNode;

define('TYPE_NAME', 'type');

define('VALUE_NAME', 'value');

define('CHILDREN_NAME', 'children');

class TreeCreator
{
    private static $types = array(
        'blockExpresion' => 'blockExpresionCreator',
        'field' => 'fieldCreator',
        'string' => 'stringCreator',
        'date' => 'dateCreator',
        'like' => 'likeCreator',
        'not' => 'notCreator',
        'positive' => 'positiveCreator',
        'dateRange' => 'dateRangeCreator'
    );

    /**
     * @param array $arrayTree
     * @return IFilterNode
     */
    public static function createTree($arrayTree){
        $type = $arrayTree[TYPE_NAME];
        $value = $arrayTree[VALUE_NAME];
        $childrenArray = $arrayTree[CHILDREN_NAME];

        $node = self::createNodeByType($type);

        foreach($childrenArray as $childArray){
            $child = self::createTree($childArray);
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
            $creator = self::$types[$type];
            return $creator();
        }

        return defaultCreator();
    }

    public function treeToArray($tree){
        $phpTypes = self::invertCreatorType();

        $result = array();

        $nodePhpType = gettype($tree);

        if (!array_key_exists($nodePhpType)){
            throw new \Exception("Unknown node");
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
            $node = $creator();
            $phpType[gettype($node)] = $type;
        }

        return $phpType;
    }
}

function defaultCreator(){
    throw new \Exception("Unknown node");
}

function blockExpresionCreator(){
    return new BlockExpresionNode();
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