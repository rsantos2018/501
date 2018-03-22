<?php

include 'model.php';

class controler
{
	private $model;

	//Quando new Controler, instancia a classa Model
	public function __construct(){
		$this->model = new model();
	}

	//Quando rodar a aplicação, vamos pegar os dados no model e incluir nossa view.
	public function run(){
		$string = $this->model->getString();
		include 'view.php';
	}
}