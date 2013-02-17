<?php

namespace Dandelion\MVC\Core;

/**
 * Description of View
 *
 * @author Alex
 */
class View {

    /**
     * @ParamType file string
     * @ParamType media string
     * @ReturnType string
     */
    public function css($file = style, $media = "All") {
        // Not yet implemented
    }

    /**
     * @ParamType file string
     * @ReturnType string
     */
    public function js($file = script) {
        // Not yet implemented
    }

    /**
     * @ParamType file string
     * @ParamType extension string
     * @ReturnType string
     */
    public function imgUrl($file, $extension = "png") {
        // Not yet implemented
    }

}

?>
