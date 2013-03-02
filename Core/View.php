<?php

namespace Dandelion\MVC\Core;

/**
 * Dandelion MVC helper for most commond views related needs.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2013 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 */
class View {

    /**
     * 
     * @param string $file
     * @param string $media
     * @return string
     */
    public function css($file = 'style', $media = 'All') {
        // Not yet implemented
    }

    /**
     * 
     * @param string $file
     * @return string
     */
    public function js($file = 'script') {
        // Not yet implemented
    }

    /**
     * 
     * @param string $file
     * @param string $extension
     * @return string
     */
    public function imgUrl($file, $extension = 'png') {
        // Not yet implemented
    }
    
    /**
     * 
     * @param string $controller
     * @param string $action
     * @param array $vars
     */
    public function action($controller = '', $action = ''){
        // TODO: Implement
        $_ = 'index.php?';
        $_ .= !($controller == '') ? "controller=$controller" : '';
        $_ .= !($action == '') ? "&action=$action" : '';
         return $_;
    }

}

?>
