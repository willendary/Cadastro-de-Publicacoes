<?php
include_once('conexao.php');
$descricao = $_POST['descricao'];
$inserir = "INSERT INTO publicacoes(codigoPublicacao, descricao) VALUES ('','$descricao')";
$query = mysqli_query($conn,$inserir);
?>