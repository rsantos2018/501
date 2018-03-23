<?php

require '../config/config.php';
require '../autoload.php';

use Lib\FrontController\FrontController;

//Rota
//usuarios 		-> lista de Usuarios
//usuarios/new 	-> Criar Usuario
//usuarios/edit -> Editar Usuario


(new FrontController())->run();
