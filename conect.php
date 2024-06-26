<?php
//conexão do banco
if($local){
    $host = "localhost:3306";
    $database_name = "pantheon";
    $userr = "root";
    $password = "";
} else{
    $host = "sql204.infinityfree.com:3306";
    $database_name = "if0_36745921_pantheon";
    $userr = "if0_36745921";
    $password = "w3OiSfo4i9Mx7";
}

try{
$con = new PDO("mysql:host=$host;dbname=$database_name","$userr","$password");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<script>console.log("conexão bem sucedida");</script>';
} catch(PDOException $con_error) {
    echo '<script>console.log("conexão falhou: ' . $con_error->getMessage() . '");</script>';
}




?>