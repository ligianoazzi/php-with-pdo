<?php 

require_once "IConn.php";
require_once "Conn.php";
require_once "IProduct.php";
require_once "Product.php";
require_once "ServiceProduct.php";

$db = new Conn("mysql:host=mysql.ligiano.info", "ligiano17", "ligiano17", "ligiano01");