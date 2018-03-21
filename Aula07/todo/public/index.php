<?php

require '../config/config.php';
require '../autoload.php';

use Lib\Db\Conexao;

use Model\Entity\Usuarios;
use Model\Mapper\UsuariosMapper;

echo "<pre>";
echo DSN . "<br>";

var_dump(Conexao::getInstance());
echo "<hr>";

$users = (new UsuariosMapper())->buscarTodos();
print_r($users);

$dados = [

	'nome' => 'Gabriel Jesus',
	'email' => 'gabriel@gmail.com',
	'senha' => md5('123')
];

(new UsuariosMapper)->inserir($dados);