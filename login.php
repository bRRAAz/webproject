<?php
include("conexao.php");
session_start();
if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
        $_SESSION['noemail'] = true;
        header("Location: index.php");
        exit;
    } else if(strlen($_POST['senha']) == 0){
        $_SESSION['nosenha'] = true;
        header("Location: index.php");
        exit;
    }else{

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução: " . $mysqli->error);


        $quantidade = $sql_query->num_rows;
        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        }else{
            $_SESSION["noexiste"] = true;
            header("Location: index.php");
            exit;
        }
    }
    
}
?>