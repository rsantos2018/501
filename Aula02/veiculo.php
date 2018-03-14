<?php

class Veiculo
{
	public $locomocao;
	public $tipo;

	public function acelerar(){}
	public function freiar(){}
}

class Moto extends Veiculo
{
	public function acelerar(){
		$this->velocidade += 20;

	}

class Carro extends Veiculo
{
	public function acelerar(){
		$this->velocidade += 10;

	}
}

class Bicicleta extends Veiculo
{
	public function lazer(){

	}
}

$conducao = new Carro();
$conducao->acelerar();
var_dump($conducao);

$conducao = new Moto();
$conducao->acelerar();
var_dump($conducao);





