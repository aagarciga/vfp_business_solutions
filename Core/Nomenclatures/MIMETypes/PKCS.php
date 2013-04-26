<?php

namespace Dandelion\MVC\Core\Nomenclatures\MIMETypes;

/**
 * Prefix x-pkcs MIME Type: For PKCS standard files.
 */
class PKCS {
    
    /**
     * .p12 files
     * @return string
     */
    static public function P12() {
        return 'application/x-pkcs12';
    }
    
    /**
     * .pfx files
     * @return string
     */
    static public function Pfx() {
        return 'application/x-pkcs12';
    }
    
    /**
     * .p7b files
     * @return string
     */
    static public function P7b() {
        return 'application/x-pkcs7-certificates';
    }
    
    /**
     * .spc files
     * @return string
     */
    static public function SCP() {
        return 'application/x-pkcs7-certificates';
    }
    
    /**
     * .p7r files
     * @return string
     */
    static public function P7R() {
        return 'application/x-pkcs7-certreqresp';
    }
    
    /**
     * .p7r files
     * @return string
     */
    static public function P7R() {
        return 'application/x-pkcs7-certreqresp';
    }
    
    /**
     * .p7c files
     * @return string
     */
    static public function P7C() {
        return 'application/x-pkcs7-mime';
    }
    
    /**
     * .p7m files
     * @return string
     */
    static public function P7M() {
        return 'application/x-pkcs7-mime';
    }
    
    /**
     * .p7s files
     * @return string
     */
    static public function P7S() {
        return 'application/x-pkcs7-signature';
    }

}

?>
