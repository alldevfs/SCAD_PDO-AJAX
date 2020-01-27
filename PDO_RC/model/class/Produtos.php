<?php

class Produtos{
 public $id;
 public $descricao;
 public $quantidade;
 public $valor;
 

 public function __construct($id = false){
  if ($id) {
    $this->id = $id;
    $this->consulta();
  }
}

public static function listar(){
  $query = "SELECT id, descricao, quantidade, valor FROM produtos";
  $conexao = Conexao::pegarConexao();
  $resultado = $conexao->query($query);
  $lista = $resultado->fetchAll();
  return $lista;
}

public static function consulta(){
  $query = "SELECT id, nome, preco, quantidade FROM produtos WHERE id = " . $this->id;
  $conexao = Conexao::pegarConexao();
  $resultado = $conexao->query($query);
  $lista = $resultado->fetchAll();
  foreach ($lista as $linha) {
    $this->nome = $linha['nome'];
    $this->preco = $linha['preco'];
    $this->quantidade = $linha['quantidade'];
  }
}

// public function inserir(){
//   $query = "INSERT INTO produtos (nome) VALUES ('" . $this->nome . "')";
//   $conexao = Conexao::pegarConexao();
//   $conexao->exec($query);
// }

// public function atualizar(){
//   $query1 = "UPDATE produtos set nome = '" . $this->nome . "' WHERE id = " . $this->id;
//   $query2 = "UPDATE produtos set preco = '" . $this->preco . "' WHERE id = " . $this->id;
//   $query3 = "UPDATE produtos set quantidade = '" . $this->quantidade . "' WHERE id = " . $this->id;
//   $conexao = Conexao::pegarConexao();
//   $conexao->exec($query1);
//   $conexao->exec($query2);
//   $conexao->exec($query3);}

//   public function excluir(){
//     $query = "DELETE FROM produtos WHERE id = " . $this->id;
//     $conexao = Conexao::pegarConexao();
//     $conexao->exec($query);
//   }
}