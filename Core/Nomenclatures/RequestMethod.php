<?php

namespace Dandelion\MVC\Core\Nomenclatures;

/**
 * Description of RequestMethod
 * @ignore
 */
class RequestMethod {

    static private $get = 'GET';
    static private $post = 'POST';
    static private $put = 'PUT';
    static private $patch = 'PATCH';
    static private $delete = 'DELETE';

    static public function GET() {
        return self::$get;
    }

    static public function POST() {
        return self::$post;
    }

    static public function PUT() {
        return self::$put;
    }

    static public function PATCH() {
        return self::$patch;
    }

    static public function DELETE() {
        return self::$delete;
    }

}