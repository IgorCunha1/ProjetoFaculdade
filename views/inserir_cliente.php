<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo cliente</h1>
<div class="form-group">
<form method="post" action="processa_cliente.php">
	<br>
	<label>Nome cliente:</label><br>
	<input type="text" name="nome_cliente" class="form-control" placeholder="Insira o nome do cliente">
	<br><br>
	<label>Inserir Cliente</label><br>
	<input type="text" name="cnpj_cliente" class="form-control"  onkeypress="$(this).mask('00.000.000/0000-00')"><br><br>
	
	<input class="btn btn-success" type="submit" value="Inserir cliente">
</form>
</div>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_cliente)){ ?>
		<?php if($linha['id_cliente'] == $_GET['editar']){ ?>

			<h1>Editar cliente</h1>
		<div class="form-group">
			<form  method="post" action="edita_cliente.php" >

				<input type="hidden" name="id_cliente" value="<?php echo $linha['id_cliente']; ?>">
				<br>
				<label>Nome cliente:</label><br>
				<input class="form-control" type="text" name="nome_cliente" placeholder="Insira o nome do cliente" value="<?php echo $linha['nome_cliente']; ?>">
				<br><br>
				<label>cnpj</label><br>
				<input type="text" name="cnpj_cliente" placeholder="Insira o cnpj cliente"  value="<?php echo $linha['cnpj_cliente']; ?>"><br><br>
				<input type="submit" value="Editar cliente">
		
			</form>
		</div>
		<?php } ?>
	<?php } ?>
<?php } ?>
