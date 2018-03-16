<?php


class Foo
{
	public $bar;

	public function __construct($nome){
		$this->bar = $bar;
	}
}

echo "<pre>";

$a = 2;
$b = $a;
$a = 3;
var_dump($a, $b);

echo "<hr>";

$lucas = new Aluno('lucas');
$joao = clone $lucas;
$lucas->nome = 'Jose';
$joao->nome = 'joao';
var_dump($lucas, $joao)

