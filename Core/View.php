<?php

namespace Dandelion\MVC\Core;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Core\Nomenclatures\RequestMethod;

/**
 * Dandelion MVC helper for most commons views related needs.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2013 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 */
class View {
    
    private $action;
    
    public function __construct(Action $action) {
        $this->action = $action;
    }

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
     * @return string
     * @internal param array $vars
     */
    public function FormAction($controller = '', $action = ''){
        // TODO: Implement
        $_ = 'index.php?';
        $_ .= !($controller == '') ? "controller=$controller" : '';
        $_ .= !($action == '') ? "&action=$action" : '';
        return $_;
    }
    
    
    /**
     * Renders a partial view.
     * 
     * @param string $fileName Partial view file name.
     * @param string $prefix Partial view prefix. None by default.
     * @param string $posfix Partial view posfix. None by default.
     * @param string $context Partial view file localization (Dir). By default will be the Action view context (if action view directory is created). Otherwise, will be the Controller context, Shared view context or a given context in that order. 
     * @param string $contextPrefix View context prefix. None by default.
     * @param string $contextPosfix View context posfix. None by default.
     */
    public function Partial($fileName, $context = '', $prefix = '', $posfix = '.php', $contextPrefix = '', $contextPosfix = ''){
        if ($context == '') {            
            if ($this->action->Request->RequestMethod == RequestMethod::POST()) {
                $file = $this->ActionViewContext($contextPrefix, '_Post'.$contextPosfix) . $prefix . $fileName. $posfix;
            }
            else{
                $file = $this->ActionViewContext($contextPrefix, $contextPosfix) . $prefix . $fileName. $posfix;
            }
            if (is_file($file)) {
                extract($this->action->Data());
                include $file;
            }
            else{
                $file = $this->ControllerViewContext() . $prefix . $fileName. $posfix;
                if (is_file($file)) {
                    extract($this->action->Data());
                    include $file;
                }
                else{
                    $file = MVC_DIR_APP_VIEWS_SHARED . DIRECTORY_SEPARATOR . $prefix . $fileName. $posfix;
                    if (is_file($file)) {
                        extract($this->action->Data());
                        include $file;
                    }                    
                }   
            }
        }
        else{
            $file = $context . $prefix . $fileName. $posfix;
            if (is_file($file)) {
                 extract($this->action->Data());
                 include $file;
            }
        }
    }
    
    /**
     * Returns the current controller view context.
     * 
     * @return string The controller view directory path.
     */
    public function ControllerViewContext(){
        return MVC_DIR_APP_VIEWS . DIRECTORY_SEPARATOR . $this->action->Request->Controller . DIRECTORY_SEPARATOR;
    }
    
    /**
     * Returns the current action view context.
     * 
     * @param string $prefix
     * @param string $posfix
     * @return string The action view directory path if created. Empty string otherwise.
     */
    public function ActionViewContext($prefix = '', $posfix = ''){
        $dir = MVC_DIR_APP_VIEWS . DIRECTORY_SEPARATOR . ucfirst($this->action->Request->Controller) . DIRECTORY_SEPARATOR . $prefix . ucfirst($this->action->Request->Action) . $posfix . DIRECTORY_SEPARATOR;
        return is_dir($dir)? $dir : '';
    }
    
    /**
     * Renders a Template layout commons to a group of pages.
     * 
     * @param string $fileName
     * @param string $prefix
     * @param string $posfix
     * @param string $context
     */
    public function Template($fileName, $prefix = '', $posfix = '.Page.php', $context = ''){
        if ($context == '') {
            extract($this->action->Data());
            include MVC_DIR_APP_VIEWS_SHARED . DIRECTORY_SEPARATOR . $prefix . $fileName . $posfix;
        }
        else {
            extract($this->action->Data());
            include $context . $prefix . $fileName . $posfix;
        }
    }
}

?>
