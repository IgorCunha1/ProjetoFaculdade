<?php

include 'db.php';

$id_cliente = $_POST['id_cliente'];
$valor_pgt = $_POST['pagamento'];


$valor_tratado = number_format($valor_pgt,2, '.','');

while($linha = mysqli_fetch_array($consulta_cliente)){
    if($linha['id_cliente'] == $id_cliente){ 
        
        $divida = $linha['divida_cliente'];
        
        $nova_divida = $divida - $valor_tratado;

        $sql = "update cliente set divida_cliente = '$nova_divida' where id_cliente = '$id_cliente'";
        mysqli_query ($conexao, $sql);

        header('location:index.php?pagina=cliente');
        
    }
}



?>