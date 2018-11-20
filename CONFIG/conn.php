<?php 

try {
    $con = new PDO('mysql:host=localhost; dbname=albardas; charset=utf8', 'root','');
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>