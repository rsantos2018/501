<?php

//Classe: conta
//Propriedades: numConta, saldo, titular:
//Metodos: sacar, depositar, verSaldo, verTitular;

echo "<pre>";

Class Conta{

	public $numConta;
	public $saldo;
	private $titular;


	public function__construct($titular, $saldo = 0){
		$this->titular = $titular;
		$this->numConta = (string) rand(100,999) . "-" . rand(0,9);
		$this->depositar($saldo);

	}


	public function sacar($qtdSacar){

		$this->saldo-= $qtdSacar;

	}

	public function depositar($qtdDeposito){
		$this->saldo += $qtdDeposito;
	}

	public function setarTitular(string $nome){
		$this->titular = $nome;
	}

	public function verTitular(){
		return "O titular da conta é: " . $this->titular . "<br>";
	}

	public function verSaldo(){
		return "O Saldo atual é: " . $this->saldo . "<br>";
	}
}

$conta = new Conta();
//$conta->setarTitular("Lucas");
echo $conta->verTitular();
echo "<hr>";
$conta->depositar(1000);
echo $conta->verSaldo();
$conta->sacar(20);
echo $conta->verSaldo();
$conta->sacar(30);
echo $conta->verSaldo();
$conta->depositar(20);
echo $conta->verSaldo();
