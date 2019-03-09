<?php

namespace MoritzKiehl\Webshop\Domain\Model;

use MoritzKiehl\Webshop\Database\Database;
class Order
{
    private $database;

    public function __construct()
    {
        $this->database = Database::getDatabase();
    }
    public function getOrderInformation()
    {

    }

    public function removeOrder($id)
    {

    }

    public function getOrder($id)
    {
        return $this->database->query("SELECT * FROM order WHERE ID = " . $id)->fetch_assoc();
    }

    public function getAllOrders()
    {

        return $this->database->query("SELECT * FROM order")->fetch_all(MYSQLI_ASSOC);
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
