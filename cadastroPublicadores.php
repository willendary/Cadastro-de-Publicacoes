<?php
session_start();
include('backend/php/verifica_login.php');
?>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/style/css/bootstrap.css">
    <link rel="stylesheet" href="frontend/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/style/publicacoes.css">
    <title>Cadastro de Publicações</title>
</head>

<body>
    <form method="POST" action="../../backend/php/incluiPublicador.php" class="form-control">
        <div class="container form-control">
            <h1 class="display-5 align-center">CADASTRO DE PUBLICADORES</h1>
            <label for="">Nome</label>
            <input type="text" name="nome" class="form-control input-login" required><br>
            <label for="">Telefone</label>
            <input type="text" name="telefone" class="form-control"><br>
            <label for="">Email</label>
            <input type="email" name="email" class="form-control"><br>
            <button class="btn btn-warning">Salvar</button>
        </div>
    </form>
    <button class="btn btn-secondary" onclick="window.location.href = 'home.php'">Voltar para página inicial</button>
    <footer>
        <script lang="javascript" src="frontend/style/js/bootstrap.js"></script>
        <script lang="javascript" src="frontend/style/js/bootstrap.min.js"></script>
        <script lang="javascript" src="frontend/js/publicacoes.js"></script>
    </footer>
</body>

</html>