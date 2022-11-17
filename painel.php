<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
    <link rel="stylesheet" href="styles\painel.css">
</head>
<body>
    <header>
        <section class="nav-bar">
            <p><?php echo strtoupper($_SESSION['nome']);?></p>
            <p><a id="sair" href="logout.php">Sair</a></p>
    </header>
    <main>
        <div class="noticia">
            <h2>Teste</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet suscipit ipsum, et lacinia enim. Curabitur vitae malesuada ante. Suspendisse potenti</p>
        </div>
        <div class="noticia">
            <h2>Teste</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet suscipit ipsum, et lacinia enim. Curabitur vitae malesuada ante. Suspendisse potenti</p>
        </div>
        <div class="noticia">
            <h2>Teste</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet suscipit ipsum, et lacinia enim. Curabitur vitae malesuada ante. Suspendisse potenti</p>
        </div>
        <div class="noticia">
            <h2>Teste</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet suscipit ipsum, et lacinia enim. Curabitur vitae malesuada ante. Suspendisse potenti</p>
        </div>
        <div class="noticia">
            <h2>Teste</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet suscipit ipsum, et lacinia enim. Curabitur vitae malesuada ante. Suspendisse potenti</p>
        </div>
    </main>
</body>
</html>