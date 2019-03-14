<?php

namespace MoritzKiehl\Webshop\Domain\Model;

use MoritzKiehl\Webshop\Database\Database;
class Order
{
    private $database;

    public $orders;

    private $product;

    public function __construct()
    {
        $this->database = Database::getDatabase();
        $this->product = new Product();
        $this->orders = array();
    }

    public function removeOrder($id)
    {

    }
    public function addOrder($id){
        $this->orders[] = $this->product->getProduct($id);
    }

    public function getOrder($id)
    {
        return $this->database->query("SELECT * FROM order WHERE ID = " . $id)->fetch_assoc();
    }

    public static function getDummyOrder()
    {
        $dummy = array(
            "orderID" => 1.5,
            "customerID" => "Dummy-Artikel",
            "orderDate" => 12,
            "finalPrice" => 3,
            "supplier" => "Vader Supplies"
        );
        return $dummy;
    }

}
