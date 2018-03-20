<?php

require 'conexao.php';

class Usuario
{
	private $id;
	private $nome;
	private $email;
	private $senha;

	public function __construct (string $nome, string $email, string $senha){
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = md5($senha);
	}

	public function salvar(){
		$con = Conexao::getInstance();

		$sql = "INSERT INTO tb_usuarios (nome, email, senha) VALUES('{$this->nome}','{$this->email}','{$this->senha}')";

		$con->exec($sql);
	}
}

$usuario = new Usuario('reginaldo dos santos', 'reginaldo', '123456');

$usuario->salvar();