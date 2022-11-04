<?php
session_start();
$emailEntrar="rpererah@123.com";
$senhaEntrar=1234;

$usuario=$_POST["email"];
$senha=$_POST["senha"];


if($usuario==$emailEntrar && $senha==$senhaEntrar){
    $_SESSION['logado']=1;
    header('location:adm.php');
}else{
    $_SESSION['logado']=0;
    header('location:login.php');
}

?>