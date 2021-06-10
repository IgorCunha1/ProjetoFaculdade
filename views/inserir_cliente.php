<?php if(!isset($_GET['editar'])){ ?>

</script>

<h1>Inserir novo cliente</h1>
<div class="form-group">
<form method="post" action="processa_cliente.php">
	<br>
	<label>Nome cliente:</label><br>
	<input type="text" name="nome_cliente" class="form-control" placeholder="Insira o nome do cliente" required>
	<br><br>
	<label>CPF:</label><br>
	<input type="text" name="cnpj_cliente" class="form-control span4"  minlength="11" maxlength="11" pattern="[0-9]+$"  required oninvalid="this.setCustomValidity('Campo CPF Requer 11 Caracteres e Apenas Numeros')" 
																										 onchange="try{setCustomValidity('')}catch(e){}">
	<br><br>
	<label>Divida:</label><br>
	<input type="number" name="divida_cliente" class="form-control dinheiro" id="dinheiro" step="0.01" required><br><br>


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
				<label>CPF</label><br>
				<input  type="text" name="cnpj_cliente" minlength="11" maxlength="11" pattern="[0-9]+$"  required oninvalid="this.setCustomValidity('Campo CPF Requer 11 Caracteres e Apenas Numeros')"  onchange="try{setCustomValidity('')}catch(e){}"   value="<?php echo $linha['cnpj_cliente']; ?>"> <br><br>
				
				<input type="submit" value="Editar cliente" class="btn btn-primary">
		
			</form>
		</div>
		<?php } ?>
	<?php } ?>
<?php } ?>
