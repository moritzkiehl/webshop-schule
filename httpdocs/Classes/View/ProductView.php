<?php

namespace MoritzKiehl\Webshop\View;

use function Composer\Autoload\includeFile;
use MoritzKiehl\Webshop\Database\Database;
use MoritzKiehl\Webshop\Domain\Model\Product;
use MoritzKiehl\Webshop\Domain\Model\Order;

class ProductView
{
    /**
     * @function
     * Function to output Product Information from E3FI6\Webshop\Domain\Model\Product\Product
     * At the Moment uses Dummy function
     */

    public static function outputProduct($id)
    {
        $product = new Product;
        $information = $product->getProduct($id);
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
            <form name='addProductToOrder' action='' method='post'>
            <input  class='hide' name='product' type='text' value='" . $information['ID'] . "'>
            <input type='submit'  value='Produkt hinzufügen' name='addProductToOrder'/>    
</form> </div></div>
";
        }
    }
}

if (isset($_POST["addProductToOrder"])) {
    $_SESSION["order"] = $_POST["product"];
}