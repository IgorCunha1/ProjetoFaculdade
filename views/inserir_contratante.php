<?php if(!isset($_GET['editar'])){ ?>

</script>

<h1>Inserir novo contratante</h1>
<div class="form-group">
<form method="post" action="processa_contratante.php">
	<br>
	<label>Nome contratante:</label><br>
	<input type="text" name="nome_contratante" class="form-control" placeholder="Insira o nome do contratante" required>
	<br><br>
	<label>CNPJ:</label><br>
	<input type="text" name="cnpj_contratante" class="form-control"  required>
	<br><br>
	<label>Cliente:</label><br>
	<table>
				<select class="form-control dinheiro" name="cliente"> 
				<?php 
					$sql = "SELECT * FROM cliente";
					$resultado_clientes = mysqli_query($conexao, $sql);

					/*while ($linha = mysqli_fetch_assoc($resultado_clientes)){*/
					while($linha = mysqli_fetch_array($consulta_cliente)){?>

					<option  value="<?php echo $linha['id_cliente']; ?>"> <?php echo $linha['nome_cliente']. " - ".$linha['cnpj_cliente'] ?> </option> 
					
					<?php } ?>
				
				</select>
	</table>
	<br><br>


	<input class="btn btn-success" type="submit" value="Inserir contratante">
</form>
</div>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_contratante)){ ?>
		<?php if($linha['id_contratante'] == $_GET['editar']){ ?>

			<h1>Editar contratante</h1>
		<div class="form-group">
			<form  method="post" action="edita_contratante.php" >

				<input type="hidden" name="id_contratante" value="<?php echo $linha['id_contratante']; ?>">
				<br>
				<label>Nome contratante:</label><br>
				<input class="form-control" type="text" name="nome_contratante" placeholder="Insira o nome do contratante" value="<?php echo $linha['nome_contratante']; ?>">
				<br><br>
				<label>cnpj</label><br>
				<input type="text" name="cnpj_contratante" placeholder="Insira o cnpj contratante"  value="<?php echo $linha['cnpj_contratante']; ?>"><br><br>
				<label>Cliente:</label><br>
	<table>
				<select class="form-control dinheiro" name="editcliente"> 
				<?php 
					$sql = "SELECT * FROM cliente";
					$resultado_clientes = mysqli_query($conexao, $sql);

					/*while ($linha = mysqli_fetch_assoc($resultado_clientes)){*/
					while($linha = mysqli_fetch_array($consulta_cliente)){?>

					<option  value="<?php echo $linha['id_cliente']; ?>"> <?php echo $linha['nome_cliente']. " - ".$linha['cnpj_cliente'] ?> </option> 
					
					<?php } ?>
				
				</select>
	</table> <br> <br>
				
				<input type="submit" value="Editar contratante" class="btn btn-primary">
		
			</form>
		</div>
		<?php } ?>
	<?php } ?>
<?php } ?>
