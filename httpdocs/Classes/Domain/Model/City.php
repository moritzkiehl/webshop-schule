<?php

namespace MoritzKiehl\Webshop\Domain\Model;

use MoritzKiehl\Webshop\Database\Database;

class City
{
    private $database;

    public function __construct()
    {
        $this->database = Database::getDatabase();
    }

    public function removeCity($id)
    {

    }

    public function addCity($stuff){

    }

    public function getCity($id)
    {
        return $this->database->query("SELECT * FROM city WHERE ID = " . $id)->fetch_assoc();
    }

    public function getAllCities()
    {

        return $this->database->query("SELECT * FROM city")->fetch_all(MYSQLI_ASSOC);
    }

    public static function getDummyCustomer()
    {
        $dummy = array(
            "cityID" => 1,
            "countryID" => 1,
            "postalCode" => 321456,
            "cityName" => "Deathstar"

        );

        return $dummy;
    }

}
