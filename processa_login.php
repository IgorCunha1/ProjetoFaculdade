<?php

session_start();
include 'db.php';
/*
if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('location: login.php');
    exit();
}
*/

$usuario =  $_POST['usuario'];
$senha = $_POST['senha'];


$query = "select id_usuario from usuario where nome_usuario = '$usuario' and senha_usuario = '$senha'" ;

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if($row == 1){

    $_SESSION['usuario'] = $usuario;
    header('location: index.php?pagina=quemsomos');
    exit();

}else{

    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='/ProjetoFaculdade/login.php';</script>";

        
}
header('location: ');
    
exit();
