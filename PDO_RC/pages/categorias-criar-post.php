<?php
require_once 'global.php';

try {
    $aux = new Pessoa();
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $tipo = $_POST['tipo'];

    $aux->nome = $nome;
    $aux->endereco = $endereco;
    $aux->numero = $numero;
    $aux->tipo = $tipo;
    $aux->inserir();

    header('Location: clientes.php');
} catch (Exception $e) {
    Erro::trataErro($e);
}