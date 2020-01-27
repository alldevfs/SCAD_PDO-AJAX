<?php require_once "global.php" ?>

<?php
try {
	$id = $_GET['id'];
	$aux = new Pessoa($id);

	$aux->excluir();

	header('Location: clientes.php');
} catch (Exception $e) {
	Erro::trataErro($e);
}