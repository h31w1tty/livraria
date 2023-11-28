<html><head><meta charset="utf-8"></head></html>
<?php

$servidor = "localhost";
$usuario = "root"; 
$senha = "usbw";
$banco = "livraria";
$con = new mysqli($servidor, $usuario, $senha, $banco);
if(!$con){
    echo "erro de conexão".$con -> error;
}

?>