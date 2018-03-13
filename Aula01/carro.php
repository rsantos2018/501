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

	

	public function verCor(){
		return "A cor do carro é: " . $this->cor;
	}

	public function verMarca(){
		return "A marca do carro é: " . $this->marca;
	}

	public function acelelar(){
		$this->velocidade +=10;
	}

	public function freiar(){
		$this->velocidade -=10;
	}

	public function trocarMarcha($primeiraMarcha){
		$this->velocidade=20;

	}

	public function trocarMarchar($segundaMarcha){
		$this->velocidade=30;
	}

}

$carro->
