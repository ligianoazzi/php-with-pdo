<?php 

require_once "IConn.php";
require_once "Conn.php";
require_once "IProduct.php";
require_once "Product.php";
require_once "ServiceProduct.php";

$db = new Conn("mysql.ligiano.info", "ligiano17", "ligiano17", "ligiano01");

$product = new Product;

/*
$product->setName("Html course");
$product->setDesc("Excelent product");
$service = new ServiceProduct($db, $product);
$service_save = $service->save();
print_r($service_save);
*/

/*
$product->setId("4");
$product->setName("PHP course");
$product->setDesc("Really Excelent product");
$service = new ServiceProduct($db, $product);
$service_update = $service->update();
echo($service_update);
*/

/*
$service = new ServiceProduct($db, $product);
$delete = $service->delete(3);
echo $delete;
*/

$service = new ServiceProduct($db, $product);
$find = $service->find(4);

print_r($find);


