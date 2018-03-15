<?php 

trait Log 
{
	public $att = 'reginaldo';
	protected function escreverLog($msg){
		echo "O desenvolvedor foi $msg";
	}
}

class X
{
	use Log;

	public function salvar(){
		$this->escreverLog("Programador " . $this->att);
	}
}

class Y extends X
{
	public function save(){
		$this->escreverLog("Desenvolvedor " . $this->att);	
	}
}

$x = new X();
$x->salvar();
echo "<br>";
$y = new Y();
$y->save();
