<?php

include 'db.php';

$valor_pgt = $_POST['vlr_pgt'];


$valor_tratado = number_format($valor_pgt,2, '.','');


echo $valor_tratado;



?>