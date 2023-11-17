<html><head><meta charset="utf-8"></head></html>
<?php

$servidor = "https://h31w1tty.000.pe";
$usuario = "if0_35446583"; 
$senha = "i76I0773bj";
$banco = "livraria";
$con = new mysqli($servidor, $usuario, $senha, $banco);
if(!$con){
    echo "erro de conexão".$con -> error;
}

?>