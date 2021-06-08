

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
							<tr><strong>Id cliente: </strong> <?php echo $linha['id_cliente']; ?></tr><br>
							<tr><strong>Nome cliente: </strong><?php echo $linha['nome_cliente']; ?></tr><br>
							<tr><strong>cnpj: </strong><?php echo $linha['cnpj_cliente']; ?></tr><br><br>
				<hr size = 7>
			<br/> 
					<h1> Conta </h1>
			
			</br>
				<div class="form-group">
						
							<tr> <strong style="font-size:20px;"> Divida: </strong>  R$ <?php echo $linha['divida_cliente']; ?></tr><br><br>
							<tr> <label><strong> Valor a Pagar </strong></label> </tr>
							<tr> <input type="number" class="form-control dinheiro" id="dinheiro" name="vlr_pgt" step="0.01"> </tr> <br>
							
							<input type="submit" class="btn btn-primary" value="Realizar Pagamento">
					</form>
				</div>
		</div>
<?php } } ?>
