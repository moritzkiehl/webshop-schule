<?php

namespace MoritzKiehl\Webshop\Domain\Model;

use MoritzKiehl\Webshop\Database\Database;

class Product
{
    private $database;

    public function __construct()
    {
        $this->database = Database::getDatabase();
    }

    public function removeProduct($id)
    {
    }

    public function getProduct($id)
    {
        return $this->database->query("SELECT * FROM products WHERE ID = " . $id)->fetch_assoc();
    }

    public function getAllProducts()
    {

        return $this->database->query("SELECT * FROM products")->fetch_all(MYSQLI_ASSOC);
    }

    public static function getDummyProductInformation()
    {
        $dummy = array(
            "productID" => 1,
            "price" => 1.5,
            "name" => "Dummy-Artikel",
            "amount" => 12,
            "weight" => 3,
            "category" => 2,
            "producer" => "Vader-PCs",
        );

        return $dummy;
    }

}
