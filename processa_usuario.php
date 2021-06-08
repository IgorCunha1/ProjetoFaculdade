<?php 

include 'db.php';

$nome_usuario = $_POST['nome_usuario'];
$senha_usuario = $_POST['senha_usuario'];

$query = "INSERT INTO usuario(nome_usuario, senha_usuario) VALUES('$nome_usuario', '$senha_usuario')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=usuario');
