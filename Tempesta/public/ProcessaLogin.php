<?php

include "Conecao.php";
session_start();

$email = $_POST['email_USUARIO'];
$senha = $_POST['senha_USUARIO'];
//Listar todos os dados do usuario de acordo com email e senha digitados no login
$sqlLogin = "SELECT * from usuario where email_USUARIO like '$email' and senha_USUARIO like '$senha'";
$rsLogin = mysqli_query($conn, $sqlLogin)or die(mysqli_error($conn));

if (mysqli_num_rows($rsLogin) > 0) {

    $tblLogin = mysqli_fetch_array($rsLogin); //pegando dados do banco
    $_SESSION['nome'] = $tblLogin['nome_USUARIO'];
    $_SESSION['email'] = $tblLogin['email_USUARIO'];
    $statusLogin = 1;
    $_SESSION['permissao'] = $tblLogin['codigoPermissao_USUARIO'];
    $_SESSION['telefone'] = $tblLogin['telefone_USUARIO'];

    if ($_SESSION['permissao'] == 1) {
        header("location:pgADM.php");
    } else if ($_SESSION['permissao'] == 2) {
        header("location:index.php");
    }
}

?>