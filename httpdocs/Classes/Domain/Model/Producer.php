<?php

namespace MoritzKiehl\Webshop\Domain\Model;

use MoritzKiehl\Webshop\Database\Database;
class Producer
{
    private $database;

    public function __construct()
    {
        $this->database = Database::getDatabase();
    }

  public function getProducerInformation()
    {

    }

    public function removeProduct($id)
    {

    }

    public function getProducer($id)
    {
        return $this->database->query("SELECT * FROM producer WHERE ID = " . $id)->fetch_assoc();
    }

    public function getAllProducers()
    {

        return $this->database->query("SELECT * FROM producer")->fetch_all(MYSQLI_ASSOC);
    }

    public static function getDummyProducerInformation()
    {
        $dummy = array(
            "producerID" => 1,
            "name" => "Vader-Products",
            "town" => "Vader-City",
            "phone" => 123456,
            "email" => "vaderproducts@sith.deathstar",
            "fax" => 654321,
            "street_nr" => "Lasersword Street 1"
        );

        return $dummy;
    }

}
