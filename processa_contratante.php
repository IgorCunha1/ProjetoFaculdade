<?php 

include 'db.php';

$nome_contratante = $_POST['nome_contratante'];
$cnpj_contratante = $_POST['cnpj_contratante'];
$cliente = $_POST['cliente'];


$query = "INSERT INTO contratante(nome_contratante, cnpj_contratante, id_cliente) VALUES('$nome_contratante', '$cnpj_contratante', '$cliente')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=contratante');
