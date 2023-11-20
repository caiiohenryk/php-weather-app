<?php

## Criando o BD

if(!is_file('db/usuarios.sqlite3')) {
    file_put_contents('db/usuarios.sqlite3', null);
}

## Realizando a conexão com o BD e configurando o PDO

$conn = new PDO('sqlite:db/usuarios.sqlite3');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

## Criando os objetos no BD

$query = "CREATE TABLE IF NOT EXISTS usuario(id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username TEXT, senha TEXT)";

## Executando o BD

$conn->exec($query);


?>