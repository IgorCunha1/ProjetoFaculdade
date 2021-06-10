<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "novaSenha";
$db = "acionape";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM cliente";
$consulta_cliente = mysqli_query($conexao, $query);

$queryUsuario = "SELECT * FROM usuario";
$consulta_usuario = mysqli_query($conexao, $queryUsuario);

$queryContratante = "SELECT * FROM contratante";
$consulta_contratante = mysqli_query($conexao, $queryContratante);



