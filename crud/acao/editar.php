<?php
include("conexao.php");

$titulo = $_POST['titulo'];
$texto = $_POST['conteudo'];
$id  = $_POST['id'];

$atualizar = mysql_query("UPDATE tbl_conteudo SET titulo_conteudo='$titulo',texto_conteudo ='$texto' WHERE id_conteudo ='$id'")or die(mysql_error());

//($atualizar) ? print 'alert("Dados alterados com sucesso"); header:location(../login.php);' : die('Falha ao alterar dados');

echo "<script>location.href='../index.php'; alert('Alterado com sucesso');</script>";