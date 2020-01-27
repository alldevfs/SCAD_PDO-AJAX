<?php

/*
	* O Controller é responsável por receber as requisições do usuário.
	* Além disso o Controller também faz as comunicações com o Model e a View
*/

require_once './global.php'; // Carrega o arquivo modelo.php

class Controlador {
	
	// Normalmente o método padrão dos controladores é chamado de index
	public function index() {
		$model = new Produtos(); // Cria um objeto Modelo
		$produtos = $model->getMensagem(); // Chama o método getMensagem() do modelo
		try {
			$aux = new Produtos();
			$lista = $aux->listar();
		} catch(Exception $e) {
			Erro::trataErro($e);
		}

		require_once 'view/produtos.php'; // Carrega o arquivo view.php
	}
}
?>