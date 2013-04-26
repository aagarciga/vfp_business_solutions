<?php

namespace Dandelion\MVC\Core\Nomenclatures\MIMETypes;

/**
 * Multipart MIME Type: For archives and other objects made of more than one part.
 */
class Multipart {

    /**
     * MIME Email. Archives and other objects made of more than one part
     * @return string
     */
    static public function Mixed() {
        return 'multipart/mixed';
    }
    
    /**
     * MIME Email. Archives and other objects made of more than one part
     * @return string
     */
    static public function Alternative() {
        return 'multipart/alternative';
    }
    
    /**
     * MIME Email and used by MHTML (HTML mail)
     * @return string
     */
    static public function Related() {
        return 'multipart/related';
    }
    
    /**
     * MIME Webform
     * @return string
     */
    static public function FormData() {
        return 'multipart/form-data';
    }
    
    /**
     * MIME Signed
     * @return string
     */
    static public function Signed() {
        return 'multipart/signed';
    }
    
    /**
     * MIME Encrypted
     * @return string
     */
    static public function Encrypted() {
        return 'multipart/Encrypted';
    }

}

?>
