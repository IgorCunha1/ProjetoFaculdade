<?php 

include 'db.php';

$nome_cliente = $_POST['nome_cliente'];
$cnpj_cliente = $_POST['cnpj_cliente'];

$divida_cliente = $_POST['divida_cliente'];


$valor_tratado = number_format($divida_cliente,2, '.','');




$query = "INSERT INTO cliente(nome_cliente, cnpj_cliente, divida_cliente) VALUES('$nome_cliente', '$cnpj_cliente', '$valor_tratado')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cliente');

/*
echo $valor_tratado;
*/