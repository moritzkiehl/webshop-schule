<?php

namespace MoritzKiehl\Webshop\View;

use MoritzKiehl\Webshop\Database\Database;
use MoritzKiehl\Webshop\Domain\Model\Product;

class ProductView
{
    /**
     * @function
     * Function to output Product Information from E3FI6\Webshop\Domain\Model\Product\Product
     * At the Moment uses Dummy function
     */

    public static function outputProduct()
    {
        $product = new Product;
        $information = $product->getProduct(1);
        echo "<div class='product'>
                <div class='product-body'>
                    <h1>" . $information['Name'] . "</h1>
                    <p>Preis: " . $information['Price'] . "</p>
                    <p>Bestand: " . $information['Units'] . "</p>
                </div>
            </div>";
    }

    public static function outputAllProducts()
    {
        $products = new Product;
        foreach (Database::getAllProducts() as $information) {
            echo "<div class='product'>
                <div class='product-body'>
                    <h1>" . $information['Name'] . "</h1>
                    <p>Preis: " . $information['Price'] . "</p>
                    <p>Bestand: " . $information['Units'] . "</p>
                    <p>Kategorie: " . $information['Category'] . "</p>
                    <p>Gewicht: " . $information['Weight'] . "g</p>
                    <p>Produzent: " . $information['Producer'] . "</p>
                </div>
            </div>";
        }
    }

}