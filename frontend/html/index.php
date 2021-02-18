<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../frontend/style/css/bootstrap.css">
    <link rel="stylesheet" href="../../frontend/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../frontend/style/publicacoes.css">
    <title>Acesso</title>
</head>

<body>
    <form method="POST" action="../../backend/php/login.php">
        <div class="w-25 p-3 card form-control container">
            <h1 class="display-5" align="center">Acesso ao sistema</h1>
            <label for="">Usuário</label>
            <input type="text" name="usuario" class="input-text"><br>
            <label for=" ">Senha</label>
            <input type="password" class="input-text" name="senha"><br>
            <button class="btn btn-warning">Entrar</button><br>
            <?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>
                <div class="text-danger">Usuário ou senha inválidos! Tente novamente</div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
        </div>
    </form>

    <footer>
        <script lang="javascript" src="../frontend/style/js/bootstrap.js"></script>
        <script lang="javascript" src="../../frontend/style/js/bootstrap.min.js"></script>
        <script lang="javascript" src="../../frontend/js/publicacoes.js"></script>
    </footer>
</body>

</html>