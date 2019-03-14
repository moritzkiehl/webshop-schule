<?php

namespace MoritzKiehl\Webshop\Domain\Model;

use MoritzKiehl\Webshop\Database\Database;

class Customer
{
    private $userdata;

    public function __construct()
    {
        $this->userdata = [];
    }

    public function removeCustomer($id)
    {
        $stmt = Database::getDatabase()->prepare("DELETE FROM customer WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    public function addCustomer($salutation, $firstname, $lastname, $phone, $mail, $fax, $address, $city, $username, $password)
    {

        $statement = Database::getDatabase()->prepare("INSERT INTO customer (Salutation, Firstname, Lastname, Phone, E-Mail, Fax, Address, City, Username, Password) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $statement->bind_param("sssisisiss", $salutation,$firstname,$lastname,$phone,$mail,$fax,$address,$city,$username,$password);
        $statement->execute();
        $statement->close();
    }

    public function getCustomerByID($id)
    {
        if ($this->userdata === null) {
            $this->userdata = Database::getDatabase()->query("SELECT * FROM customer WHERE ID = " . $id)->fetch_assoc();
        }
        return $this->userdata;
    }

    public function getUserByUsername($username)
    {
        if ($this->userdata === null) {

            $this->userdata = Database::getDatabase()->query("SELECT * FROM customer WHERE Username = " . $username)->fetch_assoc();
        }
        return $this->userdata;
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
