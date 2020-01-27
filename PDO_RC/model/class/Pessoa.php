<?php

class Pessoa
{


 public $id;
 public $nome;
   //exemplos para as funções carregar, inserir e atualizar
 public $endereco;
 public $numero;
 public $tipo;

 public function __construct($id = false)
 {
  if ($id) {
    $this->id = $id;
    $this->carregar();
  }
}

public function listar()
{
  $query = "SELECT id, nome, endereco, numero, tipo FROM clientes";
  $conexao = Conexao::pegarConexao();
  $resultado = $conexao->query($query);
  $lista = $resultado->fetchAll();
  return $lista;
}

public function carregar()
{
  $query = "SELECT id, nome, endereco, numero, tipo FROM clientes WHERE id = " . $this->id;
  $conexao = Conexao::pegarConexao();
  $resultado = $conexao->query($query);
  $lista = $resultado->fetchAll();
  foreach ($lista as $linha) {
    $this->nome = $linha['nome'];
    $this->endereco = $linha['endereco'];
    $this->numero = $linha['numero'];
    $this->tipo = $linha['tipo'];
  }
}

public function inserir()
{
  $query = "INSERT INTO clientes (nome, endereco, numero, tipo) VALUES ('" . $this->nome . "', '" . $this->endereco . "', '" . $this->numero . "','" . $this->tipo . "' )";
  $conexao = Conexao::pegarConexao();
  $conexao->exec($query);
}

public function atualizar()
{
  $query1 = "UPDATE clientes set nome = '" . $this->nome . "' WHERE id = " . $this->id;
  $query2 = "UPDATE clientes set endereco = '" . $this->endereco . "' WHERE id = " . $this->id;
  $query3 = "UPDATE clientes set numero = '" . $this->numero . "' WHERE id = " . $this->id;
  $query4 = "UPDATE clientes set tipo = '" . $this->tipo . "' WHERE id = " . $this->id;
  $conexao = Conexao::pegarConexao();
  $conexao->exec($query1);
  $conexao->exec($query2);
  $conexao->exec($query3);
  $conexao->exec($query4);
}

public function excluir()
{
  $query = "DELETE FROM clientes WHERE id = " . $this->id;
  $conexao = Conexao::pegarConexao();
  $conexao->exec($query);
}
}