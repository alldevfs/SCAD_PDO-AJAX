<?php require_once 'global.php' ?>

<?php
try {
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$quantidade = $_POST['quantidade'];

	$aux = new Produto($id);
	
	$aux->nome = $nome;
	$aux->preco = $preco;
	$aux->quantidade = $quantidade;

	
	$aux->atualizar();

	header('Location: produtos.php');

} catch (Exception $e) {
	Erro::trataErro($e);
}

