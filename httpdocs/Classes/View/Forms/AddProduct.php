<?php

use MoritzKiehl\Webshop\Domain\Model\Product;
use MoritzKiehl\Webshop\Database\Database;

?>
    <form name="newProduct" method="post" action="">
        <input type="text" name="productName" placeholder="Productname"/>
        <input type="text" name="price" placeholder="Preis"/>
        <input type="text" name="weight" placeholder="Gewicht"/>
        <input type="text" name="units" placeholder="Menge"/>
        <select name="category">
            <?php
            foreach (Database::getAllCategories() as $category) {
                echo '<option value="' . $category['ID'] . '">' . $category["Name"] . '</option>';
            }
            ?>
        </select>
        <select name="producer">
            <?php
            foreach (Database::getAllProducers() as $producer) {
                echo '<option value="' . $producer['ID'] . '">' . $producer["Name"] . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="newProduct" value="Produkt anlegen"/>
    </form>

<?php
if (isset($_POST["newProduct"])) {
    echo "check";
    $product = new Product();
    $name = rmHtmlEnt($_POST["productName"]);
    $price = rmHtmlEnt($_POST["price"]);
    $weight = rmHtmlEnt($_POST["weight"]);
    $untis = rmHtmlEnt($_POST["units"]);
    $category = rmHtmlEnt($_POST["category"]);
    $producer = rmHtmlEnt($_POST["producer"]);
    $product->addProduct($name, $price, $weight, $untis, $category, $producer);
    header("Refresh:0");

}
?>