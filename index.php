<?php

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'home';
}


switch($pagina){
	case 'cliente': include 'views/cliente.php'; break;
	case 'inserir_cliente': include 'views/inserir_cliente.php'; break;
	case 'inserir_usuario': include 'views/inserir_usuario.php'; break;
	case 'quemsomos': include 'views/quemsomos.php'; break;
	case 'contato': include 'views/contato.php'; break;
	case 'usuario' : include 'views/usuario.php'; break;
	case 'imprime_cliente': include 'imprime_cliente.php'; break;
	case 'visualizar_divida': include 'visualizar_divida.php'; break;
	case 'pagamento': include 'pagamento.php'; break;
	case 'login': include 'login.php'; break;
	case 'contratante': include 'views/contratante.php'; break;
	case 'inserir_contratante': include 'views/inserir_contratante.php'; break;
	case 'visualizar_contratante': include 'visualizar_contratante.php'; break;
	default: include 'views/home.php'; break;
}

# Rodapé
include 'footer.php';
