<?php

namespace Dandelion\MVC\Core\Nomenclatures\MIMETypes;

/**
 * Message MIME Type
 */
class Message {
  
    /**
     * HTTP Message
     * @return string
     */
    static public function HTTP() {
        return 'message/http';
    }
    
    /**
     * IMDN Instant Message Disposition Notification
     * @return string
     */
    static public function IMDM() {
        return 'message/imdn+xml';
    }
    
    /**
     * Email
     * @return string
     */
    static public function EmailPartial() {
        return 'message/partial';
    }
    
    /**
     * Email; EML files, MIME files, MHT files, MHTML files
     * @return string
     */
    static public function EmailERC822() {
        return 'message/rfc822';
    }     
    
}

?>
