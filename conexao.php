<?php

$porta="localhost:8889";
$nomeDoBanco="teste3";
$usuarioDoBancoDeDados="root";
$senhaDoBancoDeDados="root";

$conexao=new PDO("mysql:host=$porta;dbname=$nomeDoBanco",$usuarioDoBancoDeDados,$senhaDoBancoDeDados);


?>