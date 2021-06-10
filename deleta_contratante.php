<?php 

include 'db.php';

$id_contratante = $_GET['id_contratante'];

$query = "DELETE FROM contratante WHERE id_contratante = $id_contratante";

mysqli_query($conexao, $query);

header('location:index.php?pagina=contratante');
