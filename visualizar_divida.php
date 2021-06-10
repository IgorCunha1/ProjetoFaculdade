

<?php 

include 'db.php';


$id_cliente = $_GET['id_cliente'];

while($linha = mysqli_fetch_array($consulta_cliente)){ ?>
		<?php  if($linha['id_cliente'] == $id_cliente){ ?>
			
		<div style="padding:10px;">
			<hr size = 7>	

			<h1> Dados do Cliente </h1>
			<br/> 
			<form method="post" action="pagamento.php">
							<tr ><strong>ID CLIENTE: </strong> <input name="id_cliente"  readonly=“true” value="<?php echo $linha['id_cliente']; ?>"></tr><br><br>
							<tr><strong>NOME CLIENTE: </strong><input  readonly=“true” value="<?php echo $linha['nome_cliente']; ?>"></tr><br><br>
							<tr><strong>CPF CLIENTE: </strong><input  readonly=“true” value="<?php echo $linha['cnpj_cliente']; ?>"></tr><br><br>
				<hr size = 7>
			<br> 
					<h1> Conta </h1>
			
			<br>
				<div class="form-group">
						
							<tr> <strong style="font-size:20px;"> Divida: </strong>  R$ <?php echo $linha['divida_cliente']; ?></tr><br><br>
							<tr> <label><strong> Valor a Pagar </strong></label> </tr>
							<tr> <input type="number" name="pagamento" class="form-control dinheiro" id="dinheiro"  step="0.01"> </tr> <br>
							
							<!-- <a type="submit" class="btn btn-primary" href="?pagina=pagamento&id_cliente=<?php echo $id_cliente; ?>"> teste </a>-->
							<input type="submit" class="btn btn-primary" value="Realizar Pagamento">
			</form>

				</div>
		</div>
<?php } } ?>
