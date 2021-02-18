<?php
include_once('conexao.php');
$chave = $_POST['chave'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];
$administrador = $_POST ['administrador'];

if ($confirmarsenha <> $senha){
    
}
if (isset($administrador)) {
    echo $administrador;
}
else{
    echo "teste";
}
?>