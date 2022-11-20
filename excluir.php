<?php
session_start();
include("conexao.php");

$id = $_POST['id'];
$excluir = "DELETE FROM postagem WHERE id ='$id'";
$query_excluir = mysqli_query($mysqli, $excluir);
header("Location: postar.php");
?>