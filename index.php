<?php

try {
    $conn = new \PDO("mysql:host=mysql.ligiano.info;dbname=ligiano17","ligiano17","ligiano01");
   
    /* 
    $query = "select * from products";
    $return = $conn->exec($query);
    print_r($return);
    
    echo "<hr>";
    */
    $query = "insert into `products` (`name`, `desc`) values ('Course PHP OO', 'One more couse for improve the knowledge')";
    $return = $conn->exec($query);
    print_r($return);


} catch (\PDOException $e) {
    echo "
    <div> Error! </div>
    <div> Message: ".$e->getMessage()."
    <div> Message: ".$e->getCode();
}

