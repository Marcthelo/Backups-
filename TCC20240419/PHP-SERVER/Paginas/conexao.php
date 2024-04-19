<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "rsp_banco";

try {
    $conn = new PDO("mysql:host=$host; dbname=". $dbname, $user, $pass);
    // echo "Funcionou";
} catch (PDOException $err){
    echo "Erro";
    $err->getMenssage();
}
?>