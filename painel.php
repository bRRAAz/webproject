<?php
include('protect.php');
include('conexao.php');
$buscar_post = "SELECT * FROM postagem ORDER BY id DESC;";
$query_post = mysqli_query($mysqli, $buscar_post);
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
        <div class="nav-bar">
            <p id="nome-nav-bar"><?php echo strtoupper($_SESSION['nome']);?></p>
            <a href="postar.php" class="nav-btn">Postar</a>
            <p><a class="nav-btn" href="logout.php">Sair</a></p>
        </div>
    </header>
    <main>
        <?php
        while($receber_post = mysqli_fetch_array($query_post)){
            $post = $receber_post['post_escrito'];
            $usuario_nome = $receber_post['usuario_nome'];
        ?>
        <div class="noticia">
            <h2><?php echo $usuario_nome?></h2>
            <p><?php echo $post?></p>
        </div>
        <?php
        };
        ?>
            
        
    </main>
</body>
</html>