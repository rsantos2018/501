<?php

function dividir(int $a, int $b){
	
	if($b ==0){
		throw new Exception('Proibido dividir por zero!');
	}

	if($a == 0){
		throw new Exception('Proibido zero');
	}

	return $a / $b;
}

try{
	echo dividir (12,0);

}catch (Exception $e){
	
	echo "Erro: {$e->getMessage()}";
}