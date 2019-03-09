<?php

namespace MoritzKiehl\Webshop\Domain\Model;

use MoritzKiehl\Webshop\Database\Database;

class Country
{
    private $database;

    public function __construct()
    {
        $this->database = Database::getDatabase();
    }

    public function removeCity($id)
    {

    }

    public function addCountry($stuff){

    }

    public function getCountry($id)
    {
        return $this->database->query("SELECT * FROM countries WHERE ID = " . $id)->fetch_assoc();
    }

    public function getAllCountries()
    {

        return $this->database->query("SELECT * FROM countries")->fetch_all(MYSQLI_ASSOC);
    }

    public static function getDummyCountry()
    {
        $dummy = array(
            "ID" => 1,
            "Code" => "DE",
            "Name" => "Deathstar"

        );

        return $dummy;
    }

}
