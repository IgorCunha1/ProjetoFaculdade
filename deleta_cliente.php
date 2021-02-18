<?php 

include 'db.php';

$id_cliente = $_GET['id_cliente'];

$query = "DELETE FROM cliente WHERE ID_cliente = $id_cliente";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cliente');
