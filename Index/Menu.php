<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body style="background-color: rgb(41, 41, 41);">
    <?php 
    include("Navbar.php")?>
    <div id="caixa">
        <div id="Foto" style="float: left;">
            <img src="../img/Nautilus.jpg">
        </div>
        <div id="Foto"  style="float: right;">
            <img src="../img/tredh.jpeg">
        </div>
        <div id="Tex_But">
            <h1>Menu Inicial</h1>
            <h2>Bem-Vindo(a) <?php 
            session_start();
            include '../php/conexao.php';
            $id = $_SESSION['id'];
            $pedido = $conec->query("select * from tb_user where id_usuario='$id'");
            $resultado = $pedido->fetch_assoc();
            $nome = $resultado['nome'];
        
            if(isset($_SESSION['id'])){
                echo $nome;

            } else {
                header("Location: ../Index/index.html");
            }
            ?>    
        </h2>
            <p>
                Cadastre aqui seus Lançamentos ou crie as categorias necessaria para eles
            </p>
            <a href="Lancamento/index.html"><button id="L">Lançamento</button></a>
            <a href="Categoria/index.html"><button id="C">Categoria</button></a>
            <a href="ListarUser.php"><button id="L">Ver A lista</button></a>
            <!-- <a href="../php/logout.php"><button id="S">Sair</button></a> -->
        </div>
    </div>
</body>
    <link rel="stylesheet" href="css/menuSty.css">
</html>