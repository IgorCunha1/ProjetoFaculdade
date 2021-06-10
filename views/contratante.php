<a href="?pagina=inserir_contratante" class="btn btn-success" role="button">Inserir novo Contratante</a>
<br> <br>
<table class="table" id="contratante" style="border:1px solid #ccc; width: 100%; text-align:center ">
	
	<thead class = "thead-dark">
		<tr>
			<th>Nome Contratante</th>
			<th>CNPJ Contratante</th>
			<th>A Receber</th>
			<th>Editar</th>			
			<th>Deletar</th>
			<th>Visualizar</th>
		</tr>
	</thead>
	<?php 
		while($linha = mysqli_fetch_array($consulta_contratante)){
			echo '<tr><td >'.$linha['nome_contratante'].'</td>';
			echo '<td>'.$linha['cnpj_contratante'].'</td>';
			
	?>
	
		<td>R$</td>
        <td><a href="?pagina=inserir_contratante&editar=<?php echo $linha['id_contratante']; ?>">Editar</a></td>
		<td><a href="deleta_contratante.php?id_contratante=<?php echo $linha['id_contratante']; ?>">Deletar</a></td> 
		<td><a href="?pagina=visualizar_contratante&id_contratante=<?php echo $linha['id_contratante']; ?>">Visualizar</a></td></tr>
		
	<?php
		}
	?>

</table>