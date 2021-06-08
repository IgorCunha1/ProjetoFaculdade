<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo Usuario</h1>
<div class="form-group">
<form method="post" action="processa_usuario.php">
	<br>
	<label>Nome usuario:</label><br>
	<input type="text" name="nome_usuario" class="form-control" placeholder="Insira o nome do usuario">
	<br><br>
	<label>Senha Usuario</label><br>
	<input type="password" name="senha_usuario" class="form-control"><br><br>
	
	<input class="btn btn-success" type="submit" value="Inserir usuario">
</form>
</div>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_usuario)){ ?>
		<?php if($linha['id_usuario'] == $_GET['editar']){ ?>

			<h1>Editar Usuario</h1>
		<div class="form-group">
			<form  method="post" action="edita_usuario.php" >

				<input type="hidden" name="id_usuario" value="<?php echo $linha['id_usuario']; ?>">
				<br>
				<label>Nome Usuario:</label><br>
				<input class="form-control" type="text" name="nome_usuario" placeholder="Insira o nome do Usuario" value="<?php echo $linha['nome_usuario']; ?>">
				<br><br>
				<label>Senha:  </label><br>
				<input type="password" name="senha_usuario" placeholder="Insira a Senha do Usuario"  value="<?php echo $linha['senha_usuario']; ?>"><br><br>
				<input type="submit" value="Editar Usuario">
			
			</form>
		</div>
		<?php } ?>
	<?php } ?>
<?php } ?>
