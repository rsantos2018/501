
<?php 
namespace Model_1;
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