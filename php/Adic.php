<?php 

$conec = new mysqli($server,$user,$senha);
$conec->query("create database if not exists db_contabilidade");

$conec = new mysqli($server,$user,$senha,$base);


$conec->query("
create table if not exists tb_user(
id_usuario int auto_increment primary key,
nome varchar(40),
email varchar(45),
cargo varchar(45),
senha text)");
$conec->query("
create table if not exists tb_categoria(
id_categoria int auto_increment primary key,
nome varchar(40),
tipo bit,
descricao varchar(30)
)");
$conec->query("
create table if not exists tb_lançamento (
id_lancamento int auto_increment primary key,
data_lancamento date,
ds_lancamento varchar(40),
fk_usuario int,
fk_categoria int,
foreign key (fk_usuario) references tb_user (id_usuario),
foreign key (fk_categoria) references tb_categoria (id_categoria)
)");

?>