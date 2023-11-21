<html><head><meta charset="utf-8"></head></html>
<?php

$servidor = "sql213.infinityfree.com";
$usuario = "if0_35446583"; 
$senha = "***********";
$banco = "if0_35446583_livraria";
$con = new mysqli($servidor, $usuario, $senha, $banco);
if(!$con){
    echo "erro de conexão".$con -> error;
}

?>
