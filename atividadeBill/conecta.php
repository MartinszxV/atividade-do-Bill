<?php

$dbfile = 'banco_aula';

try {
    $pdo = new PDO("sqlite:$dbfile");

    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados feita com Sucesso!\n";
} catch (PDOException $e){
    echo "Erro ao conectar ao Banco de Dados " . $e->getMessage() . "\n";
    die();
}