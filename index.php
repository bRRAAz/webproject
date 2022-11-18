<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <main>
        
        <form action="login.php" method="post">

            <?php
            if(isset($_SESSION['noemail'])):
            ?>
            <p class="erro">Preencha seu email</p>
            <?php
            endif;
            unset($_SESSION['noemail'])
            ?>
            
            <?php
            if(isset($_SESSION["nosenha"])):
            ?>
            <p class="erro">Preencha sua senhha</p>
            <?php
            endif;
            unset($_SESSION["nosenha"]);
            ?>
            <?php
            if(isset($_SESSION["noexiste"])):
            ?>
            <p class="erro">Email e senha incorretos ou inexistentes!</p>
            <?php
            endif;
            unset($_SESSION["noexiste"]);
            ?>
            <h1 class="h1">Acesse sua conta</h1>
            <p class="inp-p">
                <input class="inps" type="text" name="email" placeholder="Email">
            </p>
            <p class="inp-p">
                <input class="inps" type="password" name="senha" placeholder="Senha">
            </p>
            <p class="inp-p">
                <button id="submit" type="submit">Entrar</button>
            </p>
            <p>
                <a href="cadastro.php">Cadastre-se</a>
            </p>

        </form>
    </main>
</body>

</html>