<!DOCTYPE html>
<html>
<head>
	<title>AcionaPE</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/loginEstilo.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	

	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>

</script>
	
</head>

<body>
	<header>
		
		<div class="container" >
			<a href="?pagina=home"><img height="100px" src="img/logo.png" title="Logo" alt="Logo"></a>
			<div id="menu">
			<a href="?pagina=index">Inicio</a>
			<a href="?pagina=quemsomos">Quem Somos</a>
			<a href="?pagina=cliente">Cliente</a>
			<a href="?pagina=contratante">Contratante</a>
			<a href="?pagina=usuario">Usuario</a>
			<a href="?pagina=contato">Contato</a>
				
			</div>
		</div>
	</header>

	<div id="conteudo" class="container">


	<?php
	function mask($val, $mask){
    $maskared = '';
    $k = 0;
    for ($i = 0; $i <= strlen($mask) - 1; ++$i) {
        if ($mask[$i] == '#') {
            if (isset($val[$k])) {
                $maskared .= $val[$k++];
            }
        } else {
            if (isset($mask[$i])) {
                $maskared .= $mask[$i];
            }
        }
    }

    return $maskared;
}
$cnpj = '11222333000199';
$cpf = '00100200300';
$cep = '08665110';
$data = '10102010';
$hora = '021050';
?>