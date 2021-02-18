<?php 

include 'db.php';

$nome_cliente = $_POST['nome_cliente'];
$cnpj_cliente = $_POST['cnpj_cliente'];

$query = "INSERT INTO cliente(nome_cliente, cnpj_cliente) VALUES('$nome_cliente', '$cnpj_cliente')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cliente');
