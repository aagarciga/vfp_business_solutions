<?php

namespace Dandelion\MVC\Core\Nomenclatures\MIMETypes;

/**
 * Prefix vnd MIME Type: For vendor-specific files.
 */
class Vnd {

    /**
     * OpenDocument Text
     * @return string
     */
    static public function OpenDocumentText() {
        return 'application/vnd.oasis.opendocument.text';
    }
    
    /**
     * OpenDocument Spreadsheet
     * @return string
     */
    static public function OpenDocumentSpreadsheet() {
        return 'application/vnd.oasis.opendocument.spreadsheet';
    }
    
    /**
     * OpenDocument Presentation
     * @return string
     */
    static public function OpenDocumentPresentation() {
        return 'application/vnd.oasis.opendocument.presentation';
    }
    
    /**
     * OpenDocument Graphics
     * @return string
     */
    static public function OpenDocumentGraphics() {
        return 'application/vnd.oasis.opendocument.graphics';
    }
    
    /**
     * Microsoft Excel files
     * @return string
     */
    static public function MicrosoftExcel() {
        return 'application/vnd.ms-excel';
    }
    
    /**
     * Microsoft Excel 2007 files
     * @return string
     */
    static public function MicrosoftExcel2007() {
        return 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
    }
    
    /**
     * Microsoft Powerpoint files
     * @return string
     */
    static public function MicrosoftPowerpoint() {
        return 'application/vnd.ms-powerpoint';
    }
    
    /**
     * Microsoft Powerpoint 2007 files
     * @return string
     */
    static public function MicrosoftPowerpoint2007() {
        return 'application/vnd.openxmlformats-officedocument.presentationml.presentation';
    }
    
    /**
     * Microsoft Word 2007 files
     * @return string
     */
    static public function MicrosoftWord2007() {
        return 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
    }
    
    /**
     * Mozilla XUL files
     * @return string
     */
    static public function MozillaXUL() {
        return 'application/vnd.mozilla.xul+xml';
    }
    
    /**
     * KML files (e.g. for Google Earth)
     * @return string
     */
    static public function KML() {
        return 'application/vnd.google-earth.kml+xml';
    }
 
}

?>
