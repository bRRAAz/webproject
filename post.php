<?php
session_start();
include('conexao.php');
$nome = $_SESSION['nome'];
$post_escrito = $mysqli->real_escape_string(trim($_POST['post_escrito']));
$buscar_postar = "INSERT INTO postagem (usuario_nome, post_escrito) VALUES ('$nome', '$post_escrito')";
if(strlen($post_escrito) != 0){
    $query_postar = mysqli_query($mysqli, $buscar_postar);
}



header("Location: postar.php");

?>