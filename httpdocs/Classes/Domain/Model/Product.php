<?php

namespace E3FI6\Webshop\Domain\Model\Product;
class Product
{
    public function getProductInformation()
    {

    }

    public function removeProduct($id)
    {

    }

    public static function getDummyProductInformation()
    {
        $dummy = array(
            "price" => 1.5,
            "name" => "Dummy-Artikel",
            "bestand" => 12
        );

        return $dummy;
    }

}