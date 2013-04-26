<?php

namespace Dandelion\MVC\Core\Nomenclatures\MIMETypes;

/**
 * Image MIME Type: For Image files
 */
class Image {

    /**
     * GIF image
     * @return string
     */
    static public function GIF() {
        return 'image/gif';
    }  
    
    /**
     * GIMP image file
     * @return string
     */
    static public function GIMP() {
        return 'image/x-xcf';
    }
    
    /**
     * JPEG JFIF image
     * @return string
     */
    static public function JPEG() {
        return 'image/jpeg';
    }
    
    /**
     * JPEG JFIF image; Associated with Internet Explorer; Listed in ms775147(v=vs.85) - Progressive JPEG, initiated before global browser support for progressive JPEGs (Microsoft and Firefox)
     * @return string
     */
    static public function PJPEG() {
        return 'image/pjpeg';
    }
    
    /**
     * Portable Network Graphics
     * @return string
     */
    static public function PNG() {
        return 'image/png';
    }
    
    /**
     * SVG vector image; Defined in SVG Tiny 1.2
     * @return string
     */
    static public function SVG() {
        return 'image/svg+xml';
    }
    
    /**
     * Tag Image File Format (only for Baseline TIFF)
     * @return string
     */
    static public function TIFF() {
        return 'image/tiff';
    }
    
}

?>
