<?php 
require 'autoload.php';
use Model_1\Aluno;
use Model_1\Turma;
echo "<pre>";
$lucas = new Aluno('Lucas Marques');
print_r($lucas);
echo "<hr>";
$tur = new Turma($lucas);
print_r($tur);
echo "<hr>";
echo $tur->getAluno()->getNome();