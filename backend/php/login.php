<?php
session_start();
include_once('conexao.php');
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ../../index.php');
    exit();
}
$usuario =  mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
$query = "SELECT codigoUsuario, chave, nome FROM usuarios where chave = '{$usuario}' and senha = md5('{$senha}')";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
if ($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: ../../home.php');
    exit();
} else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../../index.php');
    exit();
}
?>