<?php 

$server = "localhost";
$user = "root";
$senha = "root";
$base = "db_contabilidade";

$script = "create database if not exists db_contabilidade;";


$conecver = new mysqli($server,$user,$senha);

$conecver->query($script);

$script = "create table if not exists  tb_user(
    id_usuario int auto_increment primary key,
    nome varchar(40),
    email varchar(45),
    cargo varchar(45),
    senha text
    );";

$conec = new mysqli($server,$user,$senha,$base);
$conec->query($script);



?>