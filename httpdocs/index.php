<?php
session_start();
$pathInfo = $_SERVER["REQUEST_URI"];
//$pathInfo = $_SERVER["PATH_INFO"];
var_dump($pathInfo);

require_once  "vendor/autoload.php";
require_once "./functions.php";
$database = new \MoritzKiehl\Webshop\Database\Database();
include_once "Classes/View/Meta.php";
if($pathInfo == "/dashboard"){
  include_once "Classes/View/Dashboard.php";
}else{
    include_once "Classes/View/Layout.php";
}
