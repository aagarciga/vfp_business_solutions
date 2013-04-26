<?php

namespace Dandelion\MVC\Core\Nomenclatures\MIMETypes;

/**
 * Audio MIME Type: For Audio files
 */
class Audio {
   
    /**
     * .aac audio files
     * @return string
     */
    static public function AAC() {
        return 'audio/x-aac';
    }
    
    /**
     * Mulaw audio at 8 kHz, 1 channel
     * @return string
     */
    static public function Basic() {
        return 'audio/basic';
    }
    
    /**
     * Apple's CAF audio files
     * @return string
     */
    static public function CAF() {
        return 'audio/x-caf';
    }
    
    /**
     * 24bit Linear PCM audio at 8–48 kHz, 1-N channels
     * @return string
     */
    static public function L24() {
        return 'audio/L24';
    }
    
    /**
     * MP4 audio
     * @return string
     */
    static public function MP4() {
        return 'audio/mp4';
    }
    
    /**
     * MP3 or other MPEG audio
     * @return string
     */
    static public function MPEG() {
        return 'audio/mpeg';
    }
    
    /**
     * Ogg Vorbis, Speex, Flac and other audio
     * @return string
     */
    static public function OGG() {
        return 'audio/ogg';
    }
    
    /**
     * Vorbis encoded audio
     * @return string
     */
    static public function Vorbis() {
        return 'audio/vorbis';
    }
    
    /**
     * RealAudio by RealPlayer
     * @return string
     */
    static public function RealPlayer() {
        return 'audio/vnd.rn-realaudio';
    }
    
    /**
     * WAV audio
     * @return string
     */
    static public function WAV() {
        return 'audio/vnd.wave';
    }
    
    /**
     * WebM open media format
     * @return string
     */
    static public function WebM() {
        return 'audio/webm';
    }
    
}

?>
