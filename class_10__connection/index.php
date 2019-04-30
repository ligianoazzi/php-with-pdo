<?php 

require_once "IConn.php";
require_once "Conn.php";
require_once "IProduct.php";
require_once "Product.php";
require_once "ServiceProduct.php";

$db = new Conn("mysql.ligiano.info", "ligiano17", "ligiano17", "ligiano01");

$product = new Product;
$service = new ServiceProduct($db, $product);

$service_data = $service->list();

print_r($service_data);
