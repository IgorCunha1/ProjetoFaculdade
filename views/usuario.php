<a href="?pagina=inserir_usuario" class="btn btn-success" role="button">Inserir novo Usuario</a>
<br> <br>
<table class="table" style="border:1px solid #ccc; width: 100%; text-align:center ">
	
	<thead class = "thead-dark">
		<tr>
			<th>ID Usuario</th>
			<th>Nome Usuario</th>
			
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	
	<?php 

		while($linha = mysqli_fetch_array($consulta_usuario)){
			echo '<tr><td >'.$linha['id_usuario'].'</td>';
			echo '<td>'.$linha['nome_usuario'].'</td>';
			
	?>
			
		<td><a href="?pagina=inserir_usuario&editar=<?php echo $linha['id_usuario']; ?>" >Editar</a></td>
		<td><a href="deleta_usuario.php?id_usuario=<?php echo $linha['id_usuario']; ?>">Deletar</a></td></tr> 
		
	<?php
		}
	?>

</table>