<?php
//necessario para fornecer conexao
//e ele para a pagina toda caso nao carregue
require_once('conexao.php');

//puxa do input chamado name=usuario
$usuario=$_POST["usuario"];
//puxa do input chamado name=senha
$senha=$_POST["senha"];

$query=$conexao->prepare("INSERT INTO usuario(usuario,senha) VALUES(?,?)");

$query->bindParam(1,$usuario);
$query->bindParam(2,$senha);


$query->execute();

//header('location:deubom.php');





?>