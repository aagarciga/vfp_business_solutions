<?php

namespace Dandelion\MVC\Core;

/**
 * Description of XmlConfigurationFile 
 * 
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2013 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 */
class XmlConfigurationFile {

    /**
     * 
     * @var DOMDocument
     */
    private $xmlDocument;

    /**
     * 
     * @var string
     */
    private $xmlFilePath;

    /**
     * 
     * @param string $file
     * @throws \Dandelion\MVC\Core\Exceptions\ConfigurationNotChargedException
     */
    public final function __construct($file = "settings") {

        $this->xmlDocument = new \DOMDocument();
        $this->xmlFilePath = MVC_DIR_APP_DATA . DIRECTORY_SEPARATOR . $file . '.xml';

        if (is_file($this->xmlFilePath)) {
            $this->xmlDocument->load($this->xmlFilePath);
        } else {
            throw new \Dandelion\MVC\Core\Exceptions\ConfigurationNotChargedException();
        }
    }

    /**
     * 
     * @param string $key
     * @param string $value
     */
    public function Write($key, $value) {
        $this->xmlDocument->getElementsByTagName($key)->item(0)->nodeValue = $value;
        $this->xmlDocument->save($this->xmlFilePath);
    }

    /**
     * 
     * @param string $key
     * @return string 
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