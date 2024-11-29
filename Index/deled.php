<?php 
$Mexer = $_POST["id"];
$Tipo = $_POST["Tipo"];
$nomeN = $_POST["nome"];
$emailN = $_POST["email"];
$cargoN = $_POST["cargo"];
$senhaN = $_POST["senha"];

require ("../php/conexao.php");


if ($Tipo ==  "Ed") {
    $conec->query("
    update tb_user
    set nome = '$nomeN',
    email = '$emailN',
    cargo = '$cargoN',
    senha = '$senhaN'
    where id_usuario = $Mexer");
    header("location: ListarUser.php");
} else {
    $conec->query("delete from tb_user where id_usuario = $Mexer");
    header("Location: ListarUser.php");
}

?>