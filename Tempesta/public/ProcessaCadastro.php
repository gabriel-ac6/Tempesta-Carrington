<?php
include "Conecao.php";
session_start();


$email = $_POST['email_USUARIO'];
$nome = $_POST['nome_USUARIO'];
$senha = $_POST['senha_USUARIO'];
$telefone = $_POST['telefone_USUARIO'];

$sqlCadastraUsuario = "insert into USUARIO (email_USUARIO, nome_USUARIO,senha_USUARIO,telefone_USUARIO,codigoPermissao_USUARIO) values ('$email','$nome','$senha','$telefone',0)";
mysqli_query($conn, $sqlCadastraUsuario) or die(mysqli_error($conn));
header("location:Login.php");
?>
