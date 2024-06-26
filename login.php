<?php
$user = $_POST['user'];
$pw = $_POST['pw'];
require "head.php";

//coletar usuario e senha do formulario (index.php)

//encriptar senha
$pw = $user . $pw;
$epw = sha1($pw);

/* $epw = password_hash($pw, PASSWORD_ARGON2ID); */
if($debug){
    echo "<script>console.log('senha:".$pw."')</script>";
    echo "<script>console.log('senha encriptada:".$epw."')</script>";
}

//coleta senha e compara no banco de dados
$rpw = $con->query("select senha from usuarios where nome ='$user'")->fetch(PDO::FETCH_ASSOC);

if($debug){
    echo "<script>console.log('senha no banco de dados: ".$rpw."')</script>";
}

//coleta nivel de acesso do usuario
$id_user = $con->query("select id_usuario from usuarios where nome='$user'")->fetch(PDO::FETCH_ASSOC);

//compara resultados e altera os valores
if($epw = $rpw){
    $_SESSION['nome'] = $user;
    $_SESSION['id_user'] = $id_user;
    header("location:index.php");
}
else if(!$debug){
    header('location:erro_login.html');
}

?>