<table class="table table-striped" >
<tr>
  <th>ID</th>
  <th>Nome</th>
  <th>Email</th>
  <th>Cargo</th>
  <th>Editar</th>
  <th>Excluir</th>
</tr>
<?php
include ("../php/conexao.php");
$pedido = $conec->query("select * from tb_user");
$contar = $conec->query("select count(id_usuario) as num from tb_user");
$contar = $contar->fetch_assoc();


if ($pedido == null) {
    echo "Não tem nada";
    header("location: Menu.php");
} else {
    for ($i=0; $i < $contar["num"]; $i++) {
    $resultado = $pedido->fetch_assoc();
    $id = $resultado["id_usuario"];
    if(!($id == null || $id == "")){
    $nome = $resultado["nome"];
    $email = $resultado["email"];
    $cargo = $resultado["cargo"];
    echo "<tr>";
    echo "<td id='id$id'>$id</td>";
    echo "<td id='nome$id'>$nome</td>";
    echo "<td id='email$id'>$email</td>";
    echo "<td id='cargo$id'>$cargo</td>";
    echo "<td><button class='Edit' onclick='editar($id)'>Editar</button></td>";
    echo "<td><button class='Exc' onclick='deletar($id)'>Excluir</button></td>";
    echo "</tr>";
    }
}
}
?>
</table>