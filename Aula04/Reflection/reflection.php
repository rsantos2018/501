<?php 

class Aluno
{
	private $nome;

	public function __construct(string $nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}
}

$ref = new ReflectionClass ('Aluno');
print_r($ref->getProperties());