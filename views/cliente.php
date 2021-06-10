<a href="?pagina=inserir_cliente" class="btn btn-success" role="button">Inserir novo cliente</a>
<br> <br>
<table class="table" id="cliente" style="border:1px solid #ccc; width: 100%; text-align:center ">
	
	<thead class = "thead-dark">
		<tr>
			<th>Nome cliente</th>
			<th>CPF Cliente</th>
			<th>Divida</th>
			<th>Editar</th>			
			<th>Deletar</th>
			<th>Visualizar</th>
		</tr>
	</thead>
	<?php 
		

		function formatar_cpf($doc){
			$doc = preg_replace("/[^0-9]/", "",$doc);
			$qtd = strlen($doc);


			if($qtd <= 11){
				if($qtd == 11){
					$doc_formatado = 	substr($doc, 0, 3).".".
										substr($doc, 3, 3).".".
										substr($doc, 6, 3)."-".
										substr($doc, 9, 2);
				}else{
					$doc_formatado =  	substr($doc, 0, 2).".".
										substr($doc, 2, 3).".".
										substr($doc, 5, 3)."/".
										substr($doc, 8, 4);
				}

				return $doc_formatado;
			}




		}
		

		while($linha = mysqli_fetch_array($consulta_cliente)){
			echo '<tr><td >'.$linha['nome_cliente'].'</td>';
			echo '<td>'.formatar_cpf($linha['cnpj_cliente']).'</td>';
			echo '<td> R$ '.$linha['divida_cliente'].'</td>';
	?>
	
		<td><a href="?pagina=inserir_cliente&editar=<?php echo $linha['id_cliente']; ?>">Editar</a></td>
		<td><a href="deleta_cliente.php?id_cliente=<?php echo $linha['id_cliente']; ?>">Deletar</a></td> 
		<td><a href="?pagina=visualizar_divida&id_cliente=<?php echo $linha['id_cliente']; ?>">Visualizar</a></td></tr>
		
	<?php
		}
	?>

</table>

