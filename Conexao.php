<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'Varnahal';
$port = 3306;

try {
   $conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname,$user,$pass);
   //echo"deu certo na conexão";
} catch (PDOException $e) {
    //echo "deu erro na conexão: ".$e->getmessage();
}

?>