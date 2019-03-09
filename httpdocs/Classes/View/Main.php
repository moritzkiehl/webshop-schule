<?php
use MoritzKiehl\Webshop\View\ProductView;
?>

<main class="main">
    <div class="container">
        <div class="product-wrapper">
            <?php ProductView::outputAllProducts()?>
        </div>
    </div>
</main>