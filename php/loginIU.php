<?php

include 'conexao.php';
$email = $_POST['email'];
$senha = $_POST['senha'];


$pedido = $conec->query("select email,senha from tb_user where email='$email'");
echo "a";

if ($pedido == null) {
    header("localtion: index.html");
} else {
    $resultado = $pedido->fetch_assoc();

    $email_banco = $resultado['email'];

    $senha_banco = $resultado['senha'];

    if ($email == $email_banco && $senha == $senha_banco) {
        header("location: ../Index/Menu.html");
    } else {
        header("Location: ../Index/index.html");
    }
}
?>