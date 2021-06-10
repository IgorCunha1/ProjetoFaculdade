<?php 

include 'db.php';

$id_contratante = $_POST['id_contratante'];
$nome_contratante = $_POST['nome_contratante'];
$cnpj_contratante = $_POST['cnpj_contratante'];
$cliente = $_POST['editcliente'];


$query = "UPDATE contratante SET nome_contratante = '$nome_contratante', cnpj_contratante = '$cnpj_contratante', id_cliente = '$cliente' WHERE id_contratante = $id_contratante";

mysqli_query($conexao, $query);

header('location:index.php?pagina=contratante');
