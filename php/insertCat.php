<?php 
include "conexao.php";

$Data = $_POST['NOME_DT'];
$Desc = $_POST['NOME_DS'];
$CdUs = $_POST['ID_USU'];
$CdCat = $_POST['ID_CAT'];

$conec->query("insert into tb_categoria values
(null,'$Data','$Desc','$CdUs','$CdCat')");


?>