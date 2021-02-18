<?php 

include 'db.php';

$id_cliente = $_POST['id_cliente'];
$nome_cliente = $_POST['nome_cliente'];
$cnpj_cliente = $_POST['cnpj_cliente'];


$query = "UPDATE cliente SET nome_cliente = '$nome_cliente', cnpj_cliente = '$cnpj_cliente' WHERE id_cliente = $id_cliente";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cliente');
