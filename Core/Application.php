<?php

namespace Dandelion\MVC\Core;

use Dandelion\MVC\Core\Interfaces\INameable;

/**
 * Dandelion MVC application definition object for manage it's instance
 * configuration data.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2015 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 * @ignore
 */
class Application implements INameable
{

    /**
     *
     * @var \SimpleXMLElement
     */
    protected $settings;

    protected static function equalAttributeValue($xmlObj, $attributeName, $attributeValue){
        if (isset($xmlObj[$attributeName])){
            return ((string) $xmlObj[$attributeName]) == $attributeValue;
        }
        return false;
    }

    protected static function getXmlObjectByAttribute($xmlObj, $attributeName, $attributeValue){
        if (!is_array($xmlObj)){
            if (self::equalAttributeValue($xmlObj, $attributeName, $attributeValue)){
                return $xmlObj;
            }
        }
        else{
            foreach ($xmlObj as $obj){
                if (self::equalAttributeValue($obj, $attributeName, $attributeValue)){
                    return $obj;
                }
            }
        }
        return null;

    }

    protected static function getXmlObjectsByAttribute($xmlObj, $attributeName, $attributeValue){
        $result = array();
        if (is_array($xmlObj)){
            foreach ($xmlObj as $obj){
                if (self::equalAttributeValue($obj, $attributeName, $attributeValue)){
                    $result[] = $obj;
                }
            }
        }
        return $result;
    }

    protected static function getChildrenXmlObject($xmlObj, $childrenName){
        $result = array();

        foreach ($xmlObj->children() as $child){
            if ($child->getName() === $childrenName){
                $result[] = $child;
            }
        }

        return $result;
    }

    /**
     *
     * @param string $settingsFile settings
     * @internal param string $configurationFile
     */
    public final function __construct($settingsFile = 'settings')
    {
        $xmlFilePath = MVC_DIR_APP_DATA . DIRECTORY_SEPARATOR . $settingsFile . '.xml';
        $this->settings = simplexml_load_file($xmlFilePath);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->settings['Name'];
    }

    /**
     * @param $key
     * @param $value
     */
    public function SetValue($key, $value)
    {
        $this->settings[$key] = $value;
        $this->Flush();
    }

    /**
     * @param $key
     * @return mixed
     */
    public function GetValue($key)
    {
        return $this->settings[$key];
    }

    public function SetValueProperty($key, $property, $propertyValue){
        $this->settings[$key][$property] = $propertyValue;
        $this->Flush();
    }

    public function GetValueProperty($key, $property){
        return $this->settings[$key][$property];
    }

    /**
     * Save in hard disk the application instance configuration data.
     *
     * @param string $settingsFile settings
     * @return void
     */
    public final function Flush($settingsFile = 'settings')
    {
        $xmlFilePath = MVC_DIR_APP_DATA . DIRECTORY_SEPARATOR . $settingsFile . '.xml';
        file_put_contents($xmlFilePath, $this->settings->asXML());
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->SetValue('Name', $name);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return (string)$this->GetValue('Name');
    }

    /**
     * @param $defaultController
     */
    public function setDefaultController($defaultController)
    {
        $this->SetValue('Controller', $defaultController);
    }

    /**
     * @return string
     */
    public function getDefaultController()
    {
        return (string)$this->GetValue('Controller');
    }

    /**
     * @param $defaultAction
     */
    public function setDefaultAction($defaultAction) {
        $this->SetValue('Action', $defaultAction);
    }

    /**
     * @return string
     */
    public function getDefaultAction() {
        return (string)$this->GetValue('Action');
    }

    /**
     * @param $key
     * @param $value
     * @param int $index
     */
    public function SetDBValue($key, $value, $index = 0)
    {
        $this->settings->DB[$index][$key] = $value;
        $this->Flush();
    }

    /**
     * @param $key
     * @param int $index
     * @return mixed
     */
    public function GetDBValue($key, $index = 0)
    {
        return $this->settings->DB[$index][$key];
    }

}
