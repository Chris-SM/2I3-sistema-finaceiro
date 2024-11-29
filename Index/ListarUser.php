<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista</title>
</head>

<body>
    <?php 
    include("Navbar.php")?>
<div class="container text-center" style="margin-top: 50px;">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
    </div>
    <div class="col-md-auto">
  </div>
    <?php
    include("lista.php"); ?>
    <form action="deled.php" method="post" id="secreto" style="visibility: hidden;">
        <input type="number" name="id" id="sh!">
        <input type="text" name="Tipo" id="shh!">
        <input type="text" name="nome" id="shhh!">
        <input type="text" name="email" id="shhhh!">
        <input type="text" name="cargo" id="shhhhh!">
        <button type="submit"></button>
    </form>
    </div>
    <div class="col col-lg-2">
    </div>
</body>
<script>
    function editar(Escol){
        alert(Escol);
        document.getElementById("sh!").value = Escol;
        document.getElementById("shh!").value = "Ed";
        let a = document.getElementById("nome" + Escol).innerHTML;
        let b = document.getElementById("email" + Escol).innerHTML;
        let c = document.getElementById("cargo" + Escol).innerHTML;
        document.getElementById("shhh!").value = prompt("Novo nome:",a);
        document.getElementById("shhhh!").value = prompt("Novo email:",b);
        document.getElementById("shhhhh!").value = prompt("Novo cargo:",c);
        document.getElementById("secreto").submit();
    }

    function deletar(Escol) {
        document.getElementById("sh!").value = Escol
        document.getElementById("shh!").value = "Del";
        document.getElementById("secreto").submit();
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>