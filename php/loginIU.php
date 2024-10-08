
<?php 
$email = $_POST['email'];
$senha = $_POST['senha'];

include 'conexao.php';

$pedido = $conec->query("select * from tb_user where email='$email'");

$resultado = $pedido->fetch_assoc();


$email_banco = $resultado['email'];
$senha_banco = $resultado['senha'];

if($email == $email_banco && $senha == $senha_banco)
{
    header("localtion: index.html");
}
else
{

}

?>