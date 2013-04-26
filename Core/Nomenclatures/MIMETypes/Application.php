<?php

namespace Dandelion\MVC\Core\Nomenclatures\MIMETypes;

/**
 * Application MIME Types: For Multipurpose files 
 */
class Application {
    
    /**
     * Atom feeds
     * @return string
     */
    static public function AtomFeeds() {
        return 'application/atom+xml';
    }

    /**
     * ECMAScript/JavaScript. Defined in RFC 4329 (equivalent to application/javascript but with stricter processing rules)
     * @return string
     */
    static public function Ecmascript() {
        return 'application/ecmascript';
    }

    /**
     * MIME Encapsulation of EDI Objects
     * @link http://tools.ietf.org/html/rfc1767 Defined in RFC 1767
     * @return string
     */
    static public function EDIX12() {
        return 'application/EDI-X12';
    }

    /**
     * MIME Encapsulation of EDI Objects
     * @link http://tools.ietf.org/html/rfc1767 Defined in RFC 1767
     * @return string
     */
    static public function EDIFact() {
        return 'application/EDIFACT';
    }

    /**
     * JavaScript Object Notation JSON
     * @return string
     */
    static public function JSON() {
        return 'application/json';
    }

    /**
     * ECMAScript/JavaScript. Defined in RFC 4329 (equivalent to application/ecmascript but with looser processing rules) It is not accepted in IE 8 or earlier - text/javascript is accepted but it is defined as obsolete in RFC 4329. The "type" attribute of the <script> tag in HTML5 is optional. In practice, omitting the media type of JavaScript programs is the most interoperable solution, since all browsers have always assumed the correct default even before HTML5
     * @return string
     */
    static public function Javascript() {
        return 'application/javascript';
    }

    /**
     * Arbitrary binary data. Generally speaking this type identifies files that are not associated with a specific application. Contrary to past assumptions by software packages such as Apache this is not a type that should be applied to unknown files. In such a case, a server or application should not indicate a content type, as it may be incorrect, but rather, should omit the type in order to allow the recipient to guess the type
     * @return string
     */
    static public function BinaryStream() {
        return 'application/octet-stream';
    }

    /**
     * Ogg, a multimedia bitstream container format
     * @return string
     */
    static public function OGG() {
        return 'application/ogg';
    }

    /**
     * Portable Document Format, PDF has been in use for document exchange on the Internet since 1993
     * @return string
     */
    static public function PDF() {
        return 'application/pdf';
    }
    
    /**
     * PostScript
     * @return string
     */
    static public function Postscript() {
        return 'application/postscript';
    }
    
    /**
     * Resource Description Framework
     * @return string
     */
    static public function RDF() {
        return 'application/rdf+xml';
    }
    
    /**
     * RSS feeds
     * @return string
     */
    static public function RSS() {
        return 'application/rss+xml';
    }
    
    /**
     * SOAP
     * @return string
     */
    static public function SOAP() {
        return 'application/soap+xml';
    }
    
    /**
     * Web Open Font Format; (candidate recommendation; use application/x-font-woff until standard is official
     * @return string
     */
    static public function FontWOFF() {
        return 'application/font-woff';
    }
    
    /**
     * XHTML
     * @return string
     */
    static public function XHTML() {
        return 'application/xhtml+xml';
    }
    
    /**
     * XML
     * @return string
     */
    static public function XML() {
        return 'application/xml';
    }
    
    /**
     * DTD
     * @return string
     */
    static public function DTD() {
        return 'application/xml-dtd';
    }
    
    /**
     * XOP
     * @return string
     */
    static public function XOP() {
        return 'application/xop+xml';
    }
    
    /**
     * ZIP
     * @return string
     */
    static public function ZIP() {
        return 'application/zip';
    }
    
    /**
     * GZIP
     * @return string
     */
    static public function GZIP() {
        return 'application/gzip';
    }

}

?>
