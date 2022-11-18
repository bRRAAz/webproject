<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles\cadastro.css">
</head>

<body>

    <main>
        
        <form action="cadastrar.php" method="post">
            <?php
            if(isset($_SESSION['nocad'])):
            ?>
            <p class="erro">Por favor, preencha o cadastro completamente</p>
            <?php
            endif;
            unset($_SESSION['nocad'])
            ?>
            <?php
            if(isset($_SESSION["usuario_existe"])):
            ?>
            <p class="erro">Usuário existente, Não foi possivel fazer o cadastro</p>
            <?php
            endif;
            unset($_SESSION["usuario_existe"])
            ?>
            <?php
            if(isset($_SESSION["status_cadastro"])):
            ?>
            <p class="erro">Cadastro finalizado com sucesso</p>
            <?php
            endif;
            unset($_SESSION["status_cadastro"])
            ?>
            <h1>Area de Cadastro</h1>
            <p class="inp-p">
                <input class="inps" type="text" name="nome" placeholder="Nome">
            </p>
            <p class="inp-p">
                <input class="inps" type="text" name="email" placeholder="Email">
            </p>
            <p class="inp-p">
                <input class="inps" type="password" name="senha" placeholder="Senha">
            </p>
            <p>
                <button id="submit" type="submit">Cadastrar</button>
            </p>
            <a href="index.php">logar</a>
        </form>
        
    </main>


    
</body>

</html>