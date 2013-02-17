<?php

namespace Dandelion\MVC\Core;

/**
 * Description of XmlConfigurationFile 
 */
class XmlConfigurationFile {

    /**
     * @AttributeType DOMDocument
     */
    private $xmlDocument;

    /**
     * @AttributeType string
     */
    private $xmlFilePath;

    /**
     * @ParamType file string
     */
    public function __construct($file = "settings") {

        $this->xmlDocument = new \DOMDocument();
        $this->xmlFilePath = MVC_DIR_APP_DATA . DIRECTORY_SEPARATOR . $file . '.xml';

        if (is_file($this->xmlFilePath)) {
            $this->xmlDocument->load($this->xmlFilePath);
        } else {
            throw new \Dandelion\MVC\Core\Exceptions\ConfigurationNotChargedException();
        }
    }

    /**
     * @ParamType key string
     * @ParamType value string
     * @ReturnType string
     */
    public function Write($key, $value) {
        $this->xmlDocument->getElementsByTagName($key)->item(0)->nodeValue = $value;
        $this->xmlDocument->save($this->xmlFilePath);
    }

    /**
     * @ParamType key string
     * @ReturnType string
     */
    public function Read($key) {
        $node = $this->xmlDocument->getElementsByTagName($key)->item(0);
        if ($node != null) {
            return $node->nodeValue;
        }
        return 'Unknow';
    }

}

?>