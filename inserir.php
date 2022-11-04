<?php
require_once('conexao.php');

$query=$conexao->prepare("INSERT INTO usuario(id,nome) VALUES(1,'jose')");

$query->execute();




?>