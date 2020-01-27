<?php require_once 'global.php' ?>

<?php
try {
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$tipo = $_POST['tipo'];

	$aux = new Pessoa($id);
	
	$aux->nome = $nome;
	$aux->endereco = $endereco;
	$aux->numero = $numero;
	$aux->tipo = $tipo;
	
	$aux->atualizar();

	header('Location: clientes.php');

} catch (Exception $e) {
	Erro::trataErro($e);
}

