<?php 

$server = "localhost";
$user = "root";
$senha = "root";
$base = "db_contabilidade";
require("Adic.php");

$conec = new mysqli($server,$user,$senha,$base);
?>