<?php
session_start();
include('backend/php/verifica_login.php');
?>
<h2 class="display-6">Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="backend/php/logout.php" class="link">Sair</a></h2>

<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/style/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="frontend/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/style/publicacoes.css">
    <title>Cadastro de Publicações</title>
</head>

<body>
    <div class="container form-control" align="center">
        <h1 class="display-5 align-center">Sistema de Publicações</h1>
        <button onclick="window.location.href = 'cadastroPublicadores.html'" class="btn btn-warning">Cadastrar Publicador</button>
        <button onclick="window.location.href = 'cadastroPublicacao.html'" class="btn btn-warning">Cadastrar Publicação</button>
        <button onclick="window.location.href = 'cadastroPedido.html'" class='btn btn-warning'>Cadastrar Pedido</button>
        <button onclick="window.location.href = 'cadastroUsuario.html'" class='btn btn-warning'>Cadastrar usuário</button>
    </div>
    <footer>
        <script lang="javascript" src="frontend/style/js/bootstrap.js"></script>
        <script lang="javascript" src="frontend/style/js/bootstrap.min.js"></script>
        <script lang="javascript" src="frontend/js/publicacoes.js"></script>
    </footer>
</body>

</html>