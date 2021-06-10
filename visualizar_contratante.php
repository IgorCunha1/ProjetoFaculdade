<?php 

include 'db.php';


$id_contratante = $_GET['id_contratante'];

while($linha = mysqli_fetch_array($consulta_contratante)){ ?>
		<?php  if($linha['id_contratante'] == $id_contratante){ ?>
			
		<div style="padding:10px;">
			<hr size = 7>	

			<h1> Dados do contratante </h1>
			<br/> 
			<form method="post" action="pagamento.php">
							<tr><strong>ID CONTRATANTE: </strong> <input  readonly=“true”  value="<?php echo $linha['id_contratante']; ?>"></tr><br><br>

							<tr><strong>NOME CONTRATANTE: </strong><input  readonly=“true”  value="<?php echo $linha['nome_contratante']; ?>"></tr><br><br>
                            
							<tr><strong>CNPJ CONTRATANTE: </strong><input  readonly=“true”  value="<?php echo $linha['cnpj_contratante']; ?>"></tr><br><br>
				<hr size = 7>
			<br> 
		<!--			<h1> Conta </h1>
			
			<br>
				<div class="form-group">
						
							<tr> <strong style="font-size:20px;"> Divida: </strong>  R$ <?php echo $linha['divida_contratante']; ?></tr><br><br>
							<tr> <label><strong> Valor a Pagar </strong></label> </tr>
							<tr> <input type="number" name="pagamento" class="form-control dinheiro" id="dinheiro"  step="0.01"> </tr> <br>
							
							
							<input type="submit" class="btn btn-primary" value="Realizar Pagamento">
			</form>

			<?php
			

					function guardaitens(){
						
						$novo = $id_contratante;
					
					}
			?>
				</div>
		</div> -->
<?php } } ?>