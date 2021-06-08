<?php 

include 'db.php';

$id_usuario = $_POST['id_usuario'];
$nome_usuario = $_POST['nome_usuario'];
$senha_usuario = $_POST['senha_usuario'];


$query = "UPDATE usuario SET nome_usuario = '$nome_usuario', senha_usuario = '$senha_usuario' WHERE id_usuario = $id_usuario";

mysqli_query($conexao, $query);

header('location:index.php?pagina=usuario');
