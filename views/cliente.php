<a href="?pagina=inserir_cliente" class="btn btn-success" role="button">Inserir novo cliente</a>
<br> <br>
<table class="table" style="border:1px solid #ccc; width: 100%; text-align:center ">
	
	<thead class = "thead-dark">
		<tr>
			<th>Nome cliente</th>
			<th>Cnpj Cliente</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<?php 
		while($linha = mysqli_fetch_array($consulta_cliente)){
			echo '<tr><td >'.$linha['nome_cliente'].'</td>';
			echo '<td>'.$linha['cnpj_cliente'].'</td>';
	?>
	
	<!--
		<td><button class="btn btn-default glyphicon glyphicon-search" href="?pagina=inserir_cliente&editar=<?php echo $linha['id_cliente']; ?>" >Editar</a></td>	
		<td><button href="deleta_cliente.php?id_cliente=<?php echo $linha['id_cliente']; ?>">Deletar</a></td></tr>-->

		
		<td><a href="?pagina=inserir_cliente&editar=<?php echo $linha['id_cliente']; ?>" >Editar</a></td>
		<td><a href="deleta_cliente.php?id_cliente=<?php echo $linha['id_cliente']; ?>">Deletar</a></td></tr> 
		
	<?php
		}
	?>

</table>