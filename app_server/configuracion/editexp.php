         <?php

               $numexp = $_GET['numexp']; 
                 
	     ?>

<div class="row">	
	<div class="col-md-8">	
		<h4>Introduzca el nuevo numero del expediente</h4>
		<hr>
		<form action="app_server/configuracion/actexp.php" method="post">


		<?php  
				if (isset($_GET['mensaje'])) {
					if ($_GET['mensaje'] == 1) {
						echo '<div class="row">
								<div class="col-md-7">
									<div class="alert alert-success">
										<strong>Numero de Expediente Actualizado con Exito.</strong>
									</div>
								</div>
							</div>';
					}elseif ($_GET['mensaje'] == 0) {
						echo '<div class="row">
								<div class="col-md-7	">
									<div class="alert alert-danger">
										<strong>Error al Actualizar.</strong>
									</div>
								</div>
							</div>';
					}
				}
			?>
			<div class="row">
				<div class="form-group">
					<label for="campo_nexpediente" class="col-sm-2 control-label">N° Expediente</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="n_expediente" id="campo_nexpediente" >
					</div>
					<input type="hidden" class="form-control" name="newexp"  value="<?php echo $numexp ;?>">
				</div>
			</div>
			<br>
			
			<div class="row">
				<div class="col-md-7 text-right">
					<button class="btn btn-success">Guardar</button>
				</div>
			</div>	
		</form>
	</div>		
</div>		
