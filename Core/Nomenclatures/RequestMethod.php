<?php

namespace Dandelion\MVC\Core\Nomenclatures;

/**
 * Description of RequestMethod 
 */
class RequestMethod {

    static private $get = 'GET';
    static private $post = 'POST';

    static public function GET() {
        return self::$get;
    }

    static public function POST() {
        return self::$post;
    }

}

?>