<?php

namespace Dandelion\MVC\Core\Nomenclatures\MIMETypes;

/**
 * Video MIME Type: For video.
 */
class Video {

    /**
     * MPEG-1 video with multiplexed audio
     * @return string
     */
    static public function MPEG() {
        return 'video/mpeg';
    }
    
    /**
     * MP4 video
     * @return string
     */
    static public function MP4() {
        return 'video/mp4';
    }
    
    /**
     * Ogg Theora or other video (with audio)
     * @return string
     */
    static public function OGG() {
        return 'video/ogg';
    }
    
    /**
     * QuickTime video
     * @return string
     */
    static public function Quicktime() {
        return 'video/quicktime';
    }
    
    /**
     * WebM Matroska-based open media format
     * @return string
     */
    static public function WebM() {
        return 'video/webm';
    }
    
    /**
     * Matroska open media format
     * @return string
     */
    static public function Matroska() {
        return 'video/x-matroska';
    }
    
    /**
     * Windows Media Video
     * @return string
     */
    static public function WMV() {
        return 'video/x-ms-wmv';
    }
    
    /**
     * Flash video (FLV files)
     * @return string
     */
    static public function FLV() {
        return 'video/x-flv';
    }
   
}

?>
