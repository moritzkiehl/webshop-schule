<?php
use E3FI6\Webshop\Domain\View\ProductView\ProductView;
?>
<!doctype html>
<html lang="de">
<?php include_once 'Meta.php'; ?>
<body>
<?php
include_once 'Header.php';
ProductView::outputProduct();
include_once 'Footer.php';
?>
</body>
</html>