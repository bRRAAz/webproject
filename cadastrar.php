<?php
session_start();
include("conexao.php");

$nome = $mysqli->real_escape_string(trim($_POST['nome']));
$email = $mysqli->real_escape_string(trim($_POST['email']));
$senha = $mysqli->real_escape_string(trim($_POST['senha']));

$sql = "SELECT COUNT(*) as total FROM usuarios WHERE email = '$email'";
$result = mysqli_query($mysqli,$sql) or die("ERRO" . $mysqli->error);
$row = mysqli_fetch_assoc($result);
if($row['total'] == 1){
    $_SESSION["usuario_existe"] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO usuarios (nome, email, senha, data_cadastro) VALUES ('$nome','$email','$senha',NOW())";

if($mysqli->query($sql) === TRUE){
    $_SESSION["status_cadastro"] = true;
}

$mysqli->close();

header("Location: cadastro.php");
exit;
?>