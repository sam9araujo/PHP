<?php
include("conexao.php");

$id  = $_GET['id'];

$atualizar = mysql_query("Delete from tbl_conteudo WHERE id_conteudo ='$id'")or die(mysql_error());


echo "<script>location.href='index.php'; alert('FAQ excluido com sucesso');</script>";