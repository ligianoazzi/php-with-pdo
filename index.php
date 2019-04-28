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

    /* Class 4 Query 
    $query = "select * from products";

    $stmt = $conn->query($query);
    $list = $stmt->fetchAll();
    
    echo $list[0][2];
    print_r($list);
    */

    /* Class 5 - FETCH_ASSOC
    $query = "select * from products";
    $stmt = $conn->query($query);
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo $list[0]['name'];

    $query = "select * from products"; 
    $stmt = $conn->query($query); 
    $list = $stmt->fetchAll(PDO::FETCH_OBJ); // <- more used
    echo $list[0]->name;
    the pattens is FETCH_BOTH, provide object and associative
    */

    /* Class 6 - FETCH */
    /*$query = "select * from products where id = 1"; 
    $stmt = $conn->query($query); 
    $list = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($list);
    echo $list['name'];
    */
    // if nor use where in ther clausule, will give just one register, and if invert using order by will give the last register
    
    /* Class 7 - Query on the run */
    $query = "select * from products";
    ;
    foreach ($conn->query($query) as $product) {
        echo $product['name'];
        echo "<br>";
    }
    
    

} catch (\PDOException $e) {
    echo "
    <div> Error! </div>
    <div> Message: ".$e->getMessage()."
    <div> Message: ".$e->getCode();
}

