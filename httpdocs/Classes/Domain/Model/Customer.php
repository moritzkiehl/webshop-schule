<?php

namespace MoritzKiehl\Webshop\Domain\Model;

use MoritzKiehl\Webshop\Database\Database;
class Customer
{
    private $database;

    public function __construct()
    {
        $this->database = Database::getDatabase();
    }

    public function removeCustomer($id)
    {

    }

    public function addCustomer($stuff){

    }

    public function getCustomer($id)
    {
        return $this->database->query("SELECT * FROM customer WHERE ID = " . $id)->fetch_assoc();
    }

    public function getAllCustomers()
    {

        return $this->database->query("SELECT * FROM customer")->fetch_all(MYSQLI_ASSOC);
    }

    public static function getDummyCustomer()
    {
        $dummy = array(
            "customerID" => 1.5,
            "salation" => "Mr",
            "username" => "Dark Lord",
            "customerFirstName" => "Vader",
            "customerSurName" => "Skywalker",
            "phone" => 123456,
            "email" => "vaderbuys@sith.deathstar",
            "fax" => 654321,
            "street_nr" => "Lasersaber Street 2"
        );

        return $dummy;
    }

}
