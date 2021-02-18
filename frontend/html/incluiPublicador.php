<?php 
include_once('conexao.php');
$codigo = $_POST['codigo'];
$nome = $_POST ['nome'];
$telefone = $_POST ['telefone'];
$email = $_POST ['email'];

$insert = "INSERT INTO publicadores(codigoPublicador, nome, telefone, email) VALUES ('$codigo','$nome','$telefone','$email')";
$query = mysqli_query($conn,$insert);
?>