<?php 
// Multiplicação
// Não permitir multiplicação por zero
// Não permitir resultado maior que 50

<?php

class Calc
// Soma
// Não permitir número negativos
// Não pertitir resultado maior que 50

{
	public static function soma (int $a, int $b){

		if ($a < 0 || $b <0){
			throw new Exception("Não permitir números negativos");
		}

		if (($a + $b) > 50){
			throw new Exception("Não permitir número maior que 50!");	
		}

		return $a + $b;
	}
	try {
		echo Calc::soma(12,0);	
		catch (Exception $e) {
		echo "Erro: {$e->getMessage()}";
		}		
	}
echo "<hr>";

// Subtração
// Não permitir resultado menor que zero

{
	public static function sub (int $a, int $b){

		if (($a < $b)){
			throw new Exception("Não permitir resultado menor que zero!");
		}

		return $a - $b;
	}
	try {
		echo Calc::sub(12,20);	
		catch (Exception $e) {
		echo "Erro: {$e->getMessage()}";
		}		
	}
echo "<hr>";

{
	public static function mult (int $a, int $b){

		return $a * $b;
	}
}

// Divisão
// Não permitir divisão por zero
// Não permitir valor Infinito $a == 0

{
	public static function div (int $a, int $b){

	if (($a / $b)== 0){
			throw new Exception("Não permitir divisão por zero!");
		}

		return $a / $b;
	}
	try {
		echo Calc::sub(12,20);	
		catch (Exception $e) {
		echo "Erro: {$e->getMessage()}";
		}		
	}
echo "<hr>";
		return $a / $b;
	}
}
echo Calc::soma(1,2);
echo Calc::sub(1,2);
echo Calc::mult(1,2);
echo Calc::div(1,2);





class Calc
{
public static function soma (int $a, int $b){

if ($a < $b) {
	
	throw new Exception('A não pode ser menor que B!');
}	

if (($a + $b) > 50) {
	
	throw new Exception('A soma dos resultados não podem ser maior que 50.');
}	

	return $a + $b;

try {
	
	echo soma(12,0);	

catch (Exception $e) {

	echo "Erro: {$e->getMessage()}";
}
		return $a + $b;
	}
}

echo "<hr>";

class Calc
{
public static function soma (int $a, int $b){

if ($a - $b) {
	
	throw new Exception('A não pode ser menor que B!');
}	

if (($a + $b) > 50) {
	
	throw new Exception('A soma dos resultados não podem ser maior que 50.');
}	

	return $a - $b;

try {
	
	echo soma(12,0);	

catch (Exception $e) {

	echo "Erro: {$e->getMessage()}";
}
		return $a + $b;
	}
}

echo "<hr>";

