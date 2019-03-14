<?php
if(!isset($_SESSION["login"])){
    header("Location: ");
}
?>
<!doctype html>
<html lang="de">
<body>
<?php
include_once 'Header.php';
include_once  'AdminView.php';
include_once 'Footer.php';
?>
</body>
</html>