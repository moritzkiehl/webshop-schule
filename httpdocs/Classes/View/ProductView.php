<?php

namespace MoritzKiehl\Webshop\View;

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
        $information = Product::getDummyProductInformation();
        echo "<div class='product'>
                <div class='product_body'>
                    <h1>".$information['name']."</h1>
                    <p>Preis: ".$information['price']."</p>
                    <p>Bestand: ".$information['bestand']."</p>
                </div>
            </div>";
    }
}