<?php
echo "<pre>";
$conexao = new PDO('pgsql:host=localhost;dbname=aula05','reginaldo','123');
//var_dump($conexao);
$conexao->exec($sql);

$sql = "INSERT INTO tb_alunos(nome, email, senha, cpf, rg, dtNasc) VALUES('Reginaldo','regi35@terra.com.br', '123','123','123','2014-05-25')";

$sql = "INSERT INTO tb_alunos(nome, email, senha, cpf, rg, dtNasc) VALUES('Ricardo','ricardo@terra.com.br', '123','','123','2014-05-25')";

$sql = "INSERT INTO tb_alunos(nome, email, senha, cpf, rg, dtNasc) VALUES('Sandra','sandra@terra.com.br', '123','123','123','2014-05-25')";


$conexao-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try{
	$conexao->beginTransaction();
	
	$conexao->exec($sql);
	$conexao->commit();
}
catch (PDOException $e){
	$conexao->rollback();
	die("Erro:" . $e->getMessage());
}

//$sql = "SELECT * FROM tb_alunos";
//$result = $conexao->query($sql);
//$alunos = $result->fetchAll(PDO::FETCH_ASSOC);
//print_r($alunos);
