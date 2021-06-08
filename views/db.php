<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "acionape";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM cliente";
$consulta_cliente = mysqli_query($conexao, $query);

$queryUsuario = "SELECT * FROM usuario";
$consulta_usuario = mysqli_query($conexao, $queryUsuario);



