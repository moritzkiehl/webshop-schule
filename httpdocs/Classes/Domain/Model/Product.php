<?php

namespace MoritzKiehl\Webshop\Domain\Model;

use MoritzKiehl\Webshop\Database\Database;

class Product
{

    public function removeProduct($id)
    {
        $stmt = Database::getDatabase()->prepare("DELETE FROM products WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    public function addProduct($name, $price, $weight, $untis, $category, $producer)
    {
        $statement = Database::getDatabase()->prepare("INSERT INTO products (Name, Price, Units, Weight, Category, Producer) VALUES (?,?,?,?,?,?)");
        $statement->bind_param("siiiii", $name, $price, $weight, $untis, $category, $producer);
        $statement->execute();
        $statement->close();
    }

    public function getProduct($id)
    {
        return Database::getDatabase()->query("SELECT * FROM products WHERE ID = " . $id)->fetch_assoc();
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
