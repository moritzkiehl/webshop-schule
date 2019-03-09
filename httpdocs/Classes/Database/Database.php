<?php

namespace MoritzKiehl\Webshop\Database;

class Database{

    private static $mysql;

    public function __construct()
    {
        self::$mysql = new \mysqli("127.0.0.1","root","","db367901_173");
    }

    public static function getDatabase(){
        return self::$mysql;
    }

}