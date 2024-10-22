<?php 
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$senha = $_POST['NOME_ID'];

$conec->query("insert into tb_lancamento values
(null,'$nome','$email','$cargo','$senha')")


?>