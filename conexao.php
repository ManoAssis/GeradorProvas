<?php
$Servidor = "localhost";
$User = "root";
$Senha = "";
$banco = "gerador_prova";

$conexao = mysqli_connect($Servidor, $User, $Senha);
mysqli_select_db($conexao, $banco);
?>