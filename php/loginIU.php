<?php

include 'conexao.php';
$email = $_POST['email'];
$senha = $_POST['senha'];


$pedido = $conec->query("select * from tb_user where email='$email'");


if ($pedido == null) {
    header("localtion: index.html");
} else {
    $resultado = $pedido->fetch_assoc();

    $email_banco = $resultado['email'];

    $senha_banco = $resultado['senha'];

    if ($email == $email_banco && $senha == $senha_banco) {
        session_start();
        $_SESSION['id'] = $resultado['id_usuario'];
        header("location: ../Index/Menu.php");
    } else {
        header("Location: ../Index/index.html");
    }
}
?>