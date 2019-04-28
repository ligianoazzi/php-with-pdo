<?php

try {
    $conn = new \PDO("mysql:host=mysql.ligiano.info;dbname=ligiano17","ligiano17","ligiano01");
   
    /* Class 3 exec
    $query = "select * from products";
    $return = $conn->exec($query);
    print_r($return);
    */

    /* Class 3 exec    
    $query = "insert into `products` (`name`, `desc`) values ('Course PHP OO', 'One more couse for improve the knowledge')";
    $return = $conn->exec($query);
    print_r($return);
    */

    /* Class 4 Query */
    $query = "select * from products";

    $stmt = $conn->query($query);
    $list = $stmt->fetchAll();
    
    echo $list[0][2];
    print_r($list);
    


} catch (\PDOException $e) {
    echo "
    <div> Error! </div>
    <div> Message: ".$e->getMessage()."
    <div> Message: ".$e->getCode();
}

