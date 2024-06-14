<?php


global $pdo;

require_once("conecta.php");
require_once("Usuarios.php");

$usuarios = new Usuarios($pdo);


$lista = $usuarios->listarTodos();
echo "Listando - 01.".PHP_EOL;
echo "===========================".PHP_EOL;
print_r($lista);