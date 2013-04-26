<?php

namespace Dandelion\MVC\Core\Nomenclatures\MIMETypes;

/**
 * Text MIME Type: For human-readable text and source code.
 */
class Text {
    
    /**
     * Commands; subtype resident in Gecko browsers like Firefox 3.5
     * @return string
     */
    static public function CMD() {
        return 'text/cmd';
    }
    
    /**
     * Cascading Style Sheets
     * @return string
     */
    static public function CSS() {
        return 'text/css';
    }
    
    /**
     * Comma-separated values
     * @return string
     */
    static public function CSV() {
        return 'text/csv';
    }
    
    /**
     * Hyper Text Markup Language
     * @return string
     */
    static public function HTML() {
        return 'text/html';
    }
    
    /**
     * (Obsolete): JavaScript; Defined in and obsoleted by RFC 4329 in order to 
     * discourage its usage in favor of application/javascript. However, 
     * text/javascript is allowed in HTML 4 and 5 and, unlike 
     * application/javascript, has cross-browser support. The "type" attribute 
     * of the <script> tag in HTML5 is optional and there is no need to use it 
     * at all since all browsers have always assumed the correct default (even 
     * in HTML 4 where it was required by the specification).
     * @return string
     */
    static public function Javascript() {
        return 'text/javascript';
    }
    
    /**
     * Textual data
     * @return string
     */
    static public function Plain() {
        return 'text/plain';
    }
    
    /**
     * vCard (contact information)
     * @return string
     */
    static public function vCard() {
        return 'text/vcard';
    }
    
    /**
     * Extensible Markup Language
     * @return string
     */
    static public function XML() {
        return 'text/xml';
    }

}

?>
