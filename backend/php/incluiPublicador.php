<?php 
include_once('conexao.php');
$nome = $_POST ['nome'];
$telefone = $_POST ['telefone'];
$email = $_POST ['email'];

$inserir = "INSERT INTO publicadores(codigoPublicador, nome, telefone, email) VALUES ('','$nome','$telefone','$email')";
$query = mysqli_query($conn,$inserir);
?>