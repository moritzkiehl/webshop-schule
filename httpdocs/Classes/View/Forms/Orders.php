<?php

use MoritzKiehl\Webshop\Domain\Model\Product;
use MoritzKiehl\Webshop\Database\Database;

?>
    <main class="main">
        <div class="container">
            <div class="product-wrapper single">
                <?php \MoritzKiehl\Webshop\View\ProductView::outputProduct($_SESSION["order"]); ?>
                <form name='addProductToOrder' action='' method='post'>
                    <input type='submit'  value='Produkt kaufen' name='buyProduct'/>
                </form>
            </div>
        </div>
    </main>

<?php

if (isset($_POST["buyProduct"])) {
//    todo
}
?>