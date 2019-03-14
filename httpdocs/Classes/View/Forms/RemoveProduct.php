<?php

use MoritzKiehl\Webshop\Domain\Model\Product;
use MoritzKiehl\Webshop\Database\Database;

?>
    <form name="removeProduct" method="post" action="">
        <div class='product-list-view'>
            <div class="list-header">
                <span>Produktname</span><span>Preis</span><span>Bestand</span><span>Kategorie</span><span>Gewicht</span><span>Produzent</span><span>Löschen</span>
            </div>
            <?php
            foreach (Database::getAllProducts() as $information) {
                echo "
                <div class='product-list-item'>
                    <span class='product-name'>" . $information['Name'] . "</span>
                    <span>" . $information['Price'] . "</span>
                    <span>" . $information['Units'] . "</span>
                    <span>" . $information['Category'] . "</span>
                    <span>" . $information['Weight'] . "g</span>
                    <span>" . $information['Producer'] . "</span>
                <input type='checkbox' name='".$information['ID']."'>
                </div>
            ";
            }
            ?>
        </div>
        <input type="submit" name="removeProductSubmit" value="Produkt-/e löschen"/>
    </form>

<?php
if (isset($_POST["removeProductSubmit"])) {
    $product = new Product();
    foreach(array_keys($_POST) as $key){
        if($key !== "removeProductSubmit"){
            $product->removeProduct($key);
        }
    }
    header("Refresh:0");
}
?>