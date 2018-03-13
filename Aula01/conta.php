<?php

//Classe: conta
//Propriedades: numConta, saldo, titular:
//Metodos: sacar, depositar, verSaldo, verTitular;

echo "<pre>";

Class Conta{

	public $numConta;
	public $saldo;
	public $titular;

	public function sacar($qtdSacar){

		$this->saldo-= $qtdSacar;

	}

	public function depositar($qtdDeposito){
		$this->saldo += $qtdDeposito;
	}

	public function verTitular(){
		echo "O titular da conta é: " . $this->titular;
	}

	public function verSaldo(){
		return "O Saldo atual é: " . $this->saldo . "<br>";
	}
}

$conta = new Conta();
$conta->titular="Carlos Azevedo";
$conta->verTitular();
echo "<hr>";
$conta->depositar(1000);
echo $conta->verSaldo();
$conta->sacar(20);
echo $conta->verSaldo();
$conta->sacar(30);
echo $conta->verSaldo();
$conta->depositar(20);
echo $conta->verSaldo();






