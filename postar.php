<?php
session_start();
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
    <title>Editar</title>
    <link rel="stylesheet" href="styles/postar.css">
    <script src="postar.js" defer></script>
</head>
<body>
    <header>
        <div class="nav-bar">
            <p id="nome-nav-bar"><?php echo strtoupper($_SESSION['nome']);?></p>
            <a href="painel.php" class="nav-btn">Home</a>
            <a class="nav-btn" href="logout.php">Sair</a>
        </div>
    </header>
    <main>
        <form class="noticia-post" action="post.php" method="POST">
            <textarea name="post_escrito" class="post_text"></textarea>
            <button class="btn-enviar" onclick = "erro()">Enviar</button>
            <p class = "limite"></p>
        </form>
        <?php
        while($receber_post = mysqli_fetch_array($query_post)){
            if($receber_post['usuario_nome'] == $_SESSION['nome']){
                $post = $receber_post['post_escrito'];
                $id = $receber_post['id'];
                $usuario_nome = $receber_post['usuario_nome'];
        ?>
        <div class="noticia">
            <div class="top-noticia">
                <h2><?php echo $usuario_nome?></h2>
                <form action="excluir.php" method = "post"><button class="del">X</button> <input name="id" type="hidden" value = "<?php echo $id?>"></form>
            </div>
            <p><?php echo $post?></p>
        </div>
        <?php
            }
        };
        ?>
    </main>
</body>
</html>