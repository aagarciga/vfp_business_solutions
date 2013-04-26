<?php

namespace Dandelion\MVC\Core\Nomenclatures\MIMETypes;

/**
 * Prefix X MIME Type: For non-standard files.
 */
class X {

    /**
     * deb (file format), a software package format used by the Debian project
     * @return string
     */
    static public function Deb() {
        return 'application/x-deb';
    }
    
    /**
     * device-independent document in DVI format
     * @return string
     */
    static public function DVI() {
        return 'application/x-dvi';
    }
    
    /**
     * TrueType Font No registered MIME type, but this is the most commonly used
     * @return string
     */
    static public function TTF() {
        return 'application/x-font-ttf';
    }
    
    /**
     * Javascript. Very rarely used
     * @return string
     */
    static public function Javascript() {
        return 'application/x-javascript';
    }
    
    /**
     * LaTeX files
     * @return string
     */
    static public function LaTeX() {
        return 'application/x-latex';
    }
    
    /**
     * .m3u8 variant playlist
     * @return string
     */
    static public function M3U8() {
        return 'application/x-mpegURL';
    }
    
    /**
     * RAR archive files
     * @return string
     */
    static public function RAR() {
        return 'application/x-rar-compressed';
    }
    
    /**
     * Adobe Flash files for example with the extension .swf
     * @return string
     */
    static public function ShockwaveFlash() {
        return 'application/x-shockwave-flash';
    }
    
    /**
     * StuffIt archive files
     * @return string
     */
    static public function StuffIt() {
        return 'application/x-stuffit';
    }
    
    /**
     * Tarball files
     * @return string
     */
    static public function Tarball() {
        return 'application/x-tar';
    }
    
    /**
     * Form Encoded Data; Documented in HTML 4.01 Specification, Section 17.13.4.1
     * @return string
     */
    static public function FED() {
        return 'application/x-www-form-urlencoded';
    }
    
    /**
     * Add-ons to Mozilla applications (Firefox, Thunderbird, SeaMonkey, and the discontinued Sunbird)
     * @return string
     */
    static public function MozillaAddons() {
        return 'application/x-xpinstall';
    }
    
    /**
     * .aac audio files
     * @return string
     */
    static public function AAC() {
        return 'audio/x-aac';
    }
    
    /**
     * Apple's CAF audio files
     * @return string
     */
    static public function CAF() {
        return 'audio/x-caf';
    }
    
    /**
     * GIMP image file
     * @return string
     */
    static public function GIMP() {
        return 'image/x-xcf';
    }
    
    /**
     * GoogleWebToolkit data
     * @return string
     */
    static public function GoogleWebToolkit() {
        return 'text/x-gwt-rpc';
    }
    
    /**
     * jQuery template data
     * @return string
     */
    static public function TMPL() {
        return 'text/x-jquery-tmpl';
    }
   
}

?>
