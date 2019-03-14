<?php

namespace MoritzKiehl\Webshop\Database;

class Database
{

    private static $mysql;

    public function __construct()
    {
        self::$mysql = new \mysqli("127.0.0.1", "root", "", "db367901_173");
    }

    /**
     * @return \mysqli
     */
    public static function getDatabase()
    {
        return self::$mysql;
    }

    public static function getAllCustomers()
    {
        return self::$mysql->query("SELECT * FROM customer")->fetch_all(MYSQLI_ASSOC);
    }

    public static function getAllProducts()
    {
        return self::$mysql->query("SELECT * FROM products")->fetch_all(MYSQLI_ASSOC);
    }

    public static function getAllCities()
    {
        return self::$mysql->query("SELECT * FROM city")->fetch_all(MYSQLI_ASSOC);
    }

    public static function getAllCountries()
    {
        return self::$mysql->query("SELECT * FROM countries")->fetch_all(MYSQLI_ASSOC);
    }

    public static function getAllOrders()
    {
        return self::$mysql->query("SELECT * FROM order")->fetch_all(MYSQLI_ASSOC);
    }

    public static function getAllCategories()
    {
        return self::$mysql->query("SELECT * FROM categories")->fetch_all(MYSQLI_ASSOC);
    }

    public static function getAllProducers()
    {
        return self::$mysql->query("SELECT * FROM producer")->fetch_all(MYSQLI_ASSOC);
    }

}