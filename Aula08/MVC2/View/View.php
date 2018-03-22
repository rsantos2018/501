<?php

namespace View;

class View
{
	public function render(array $data){

		//extract transforma o array em variaveis, 
		//ex: array['nome'=> Reginaldo, 'empresa'=> '4linux'];
		//ex: $nome = Reginado; $empresa = '4linux';
		//echo $nome    >> 'Reginaldo';
		//echo $empresa >> '4linux';
		extract($data);
		include 'src/hello.php';
	}
}

