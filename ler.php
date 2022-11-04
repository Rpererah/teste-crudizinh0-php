<?php
require_once('conexao.php');

$query=$conexao->query("SELECT * FROM usuario");
while($row=$query->fetch(PDO::FETCH_OBJ)){
    echo $row->id."<br/>";
    echo $row->nome."<br/>";
}


?>