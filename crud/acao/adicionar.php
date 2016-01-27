<?php
include("conexao.php");
$titulo = $_POST['titulo'];
$texto = $_POST['conteudo'];
$atualizar = mysql_query("INSERT INTO tbl_conteudo (titulo_conteudo , texto_conteudo )
VALUES ('$titulo', '$texto')")or die(mysql_error());

echo "<script>location.href='../index.php'; alert('Adicionado com sucesso');</script>";

