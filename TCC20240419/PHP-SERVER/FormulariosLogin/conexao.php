<?php 
$host= 'localhost';
$user= 'root';
$password= '';
$dbname='rsp_banco';

$conn = new mysqli($host,$user,$password,$dbname);

if ($conn->connect_errno) {
    echo "Erro";
} else {
    echo "Deu certo";
}

?>