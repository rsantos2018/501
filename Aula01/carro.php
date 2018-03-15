<?php

//Classe Carro
//Atributos privados cor, marca, velocidade, marcha;
//metodos publicos, verCor, verMarca;
//Metodos publicos acelelar - aumenta a velocidade em 10;
//Metodos publicos freiar - diminui a velocidade em 10;
//Metodos publicos trocarMarcha - recebe uma marcha por parametro e altera;

Class Carro{
	private $cor;
	private $marca;
	private $velocidade;
	private $marcha;

	
	public function___construct($cor, $marca){
		$this->cor= $cor;
		$this->marca=$marca;
	}

	public function acelerar(){
		$this->velocidade +=10;
	}

	public function freiar(){
		$this->velocidade -=10;
	}

	public function trocarMarcha($marcha){
		$this->marcha=$marcha;
	}

	public function verVelocidade(){
		return  "A velocidade atual é: " $this->velocidade;
	}

}

$uno = new Carro();
$uno->cor = "Azul";
$uno->marca = "fiat";
$uno->modelo = "Uno 1.0";
$uno->acelerar();
$uno->acelerar();
$uno->acelerar();
$uno->acelerar();
echo "Velocidade atual: " . $uno->velocidade . "<br>";
$uno->freiar();
echo "Velocidade atual: " . $uno->velocidade . "<br>";
var_dump($uno);

