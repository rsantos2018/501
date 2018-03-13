<?php

echo "<pre>";

class Caneta

{
	public $cor;
	public $marca;
	public $tampada;

	public function escrever(string $texto){
		if ($this-> tampada){
			echo "Primeiro destampe a caneta";
		}else {
			echo "Escreva na Tela: " . $texto;	
		}
		
	}

	public function destampar(){
		$this->tampada = false;
	}

	public function tampar(){
		$this->tampada = true;
	}

	


}

echo "<pre>";
$bic = new Caneta();
var_dump($bic);
$bic->cor = "Vermelha";
var_dump($bic);
$bic->marca = "BIC";
var_dump($bic);
$bic->tampar();
var_dump($bic);
$bic->escrever("teste");
var_dump($bic);



$compactor = new Caneta();
$compactor->cor= "Azul";
$compactor->marca = "COMPACTOR";
var_dump($compactor);