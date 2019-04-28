<?php

try {
    $conn = new \PDO("mysql:host=mysql___.ligiano.info;dbname=ligiano17","ligiano17","ligiano01");
} catch (\PDOException $e) {
    echo "
    <div> Error! </div>
    <div> Message: ".$e->getMessage()."
    <div> Message: ".$e->getCode();
}

