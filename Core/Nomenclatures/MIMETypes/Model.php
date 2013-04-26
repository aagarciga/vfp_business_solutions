<?php

namespace Dandelion\MVC\Core\Nomenclatures\MIMETypes;

/**
 * Model MIME Type: For 3D models.
 */
class Model {
        
    /**
     * Example 3D models
     * @return string
     */
    static public function Example() {
        return 'model/example';
    }
    
    /**
     * IGS files, IGES files
     * @return string
     */
    static public function IGES() {
        return 'model/iges';
    }
    
    /**
     * IMSH files, MESH files, SILO files
     * @return string
     */
    static public function MESH() {
        return 'model/mesh';
    }
    
    /**
     * WRL files, VRML files
     * @return string
     */
    static public function VRML() {
        return 'model/vrml';
    }
    
    /**
     * X3D ISO standard for representing 3D computer graphics, X3DB binary files
     * @return string
     */
    static public function X3DBinary() {
        return 'model/x3d+binary';
    }
    
    /**
     * X3D ISO standard for representing 3D computer graphics, X3DV VRML files
     * @return string
     */
    static public function X3DVRML() {
        return 'modelx3d+vrml';
    }
    
    /**
     * X3D ISO standard for representing 3D computer graphics, X3D XML files
     * @return string
     */
    static public function X3DXML() {
        return 'model/x3d+xml';
    }
    
}

?>
