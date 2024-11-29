<?php 
include "conexao.php";

$Nome = $_POST['NOME_CA'];
$Desc = $_POST['Desc'];
if($_POST['checkbox'] == "on")
{
    $Tipo = 1;
}
else
{
    $Tipo = 0;
}



$conec->query("insert into tb_categoria values
(null,'$Nome',$Tipo,'$Desc')");

header("location: ../Index/Menu.html");
?>