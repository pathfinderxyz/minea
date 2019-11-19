<div class="row">	
	<div class="col-md-12">	
		<h3>Registrar Solicitud</h3>
		<hr>
		<form action="app_server/guardar_solicitud.php" method="post">
		<?php  
				if (isset($_GET['mensaje'])) {
					if ($_GET['mensaje'] == 1) {
						echo '<div class="row">
								<div class="col-md-7">
									<div class="alert alert-success">
										<strong>Tramite Guardado.</strong>
									</div>
								</div>
							</div>';
					}elseif ($_GET['mensaje'] == 0) {
						echo '<div class="row">
								<div class="col-md-7	">
									<div class="alert alert-danger">
										<strong>Error al guardar el registro.</strong>
									</div>
								</div>
							</div>';
					}
				}
			?>
			<div class="row">
				<div class="form-group">
					<label for="campo_nombre" class="col-sm-2 control-label">Nombre y Apellido</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="nombre" id="campo_nombre" placeholder="Nombre y Apellido" required>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="form-group">
					<label for="campo_cedula" class="col-sm-2 control-label">Cedula/RIF</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="cedula" id="campo_cedula" placeholder="Cedula" required>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="form-group">
					<label for="campo_email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="email" id="campo_email" placeholder="Email" required>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="form-group">
					<label for="campo_telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-5">
						<input type="number"  class="form-control" name="telefono" id="campo_telefono" placeholder="Telefono" required>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="form-group">
					<label for="campo_telefono2" class="col-sm-2 control-label">Telefono 2</label>
					<div class="col-sm-5">
						<input type="number" name="telefono2" class="form-control" id="campo_telefono2" placeholder="Telefono">
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="form-group">
					<label for="campo_municipio" class="col-sm-2 control-label">Municipio</label>
					<div class="col-sm-5">
						<select name="municipio" id="campo_municipio" required="" class="form-control">
							<option value=""></option>
							<option value="Nivel Central">Nivel Central</option>
							<option value="Antolin">Antolin</option>
							<option value="Arismendi">Arismendi</option>
							<option value="Diaz">Diaz</option>
							<option value="Garcia">Garcia</option>
							<option value="Gomez">Gomez</option>
							<option value="Maneiro">Maneiro</option>
							<option value="Marcano">Marcano</option>
							<option value="Mariño">Mariño</option>
							<option value="Peninsula">Peninsula</option>
							<option value="Tubores">Tubores</option>
							<option value="Villalba">Villalba</option>
						</select>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="form-group">
					<label for="campo_tramite" class="col-sm-2 control-label">Tramite</label>
					<div class="col-sm-5">
						<select name="tramite" id="campo_tramite" required="" class="form-control">
							<option value=""></option>
							<option value="A.R.N.R.">A.R.N.R.</option>
							<option value="Acreditacion Tecnica">Acreditacion Tecnica</option>
							<option value="Alegatos">Alegatos</option>
							<option value="Apoyo Institucional">Apoyo Institucional</option>
							<option value="Donacion de Plantas">Donacion de Plantas</option>
							<option value="Autorizacion o Renovacion del Permiso para la Colocacion de Toldos">Autorizacion o Renovacion del Permiso para la Colocacion de Toldos</option>
							<option value="Autorizacion para Construir ,Remodelar,demoler o utilizar maquinaria pesada">Autorizacion para Construir ,Remodelar,demoler o utilizar maquinaria pesada</option>
							<option value="Autorizacion para Realizar Contrucciones,Eventos en Zonas Costeras">Autorizacion para Realizar Contrucciones,Eventos en Zonas Costeras</option>
							<option value="Autorizaciones Otras">Autorizaciones Otras</option>
							<option value="Boca Nautica">Boca Nautica</option>
							<option value="C.U.D">C.U.D</option>
							<option value="Cambio de Guias">Cambio de Guias</option>
							<option value="Consignacion de Documentos o Recaudos">Consignacion de Documentos o Recaudos</option>
							<option value="Consulta Publica">Consulta Publica</option>
							<option value="Denuncia Ambiental">Denuncia </option>
							<option value="Desmalezamiento / Limpieza">Desmalezamiento / Limpieza</option>
							<option value="E.I.A.">E.I.A.</option>
							<option value="Facturas">Facturas</option>
							<option value="Fianza de Fiel Cumplimiento">Fianza de Fiel Cumplimiento</option>
							<option value="I.S.A.">I.S.A.</option>
							<option value="Invitacion">Invitacion</option>
							<option value="Notificaciones">Notificaciones</option>
							<option value="Permisos Otros">Permisos Otros</option>
							<option value="Pica">Pica</option>
							<option value="Poda">Poda</option>
							<option value="RACDA">RACDA</option>
							<option value="Recurso de Reconsideracion">Recurso de Reconsideracion</option>
							<option value="Relacion Pago Tasa">Relacion Pago Tasa</option>
							<option value="Renovaciones">Renovaciones</option>
							<option value="Resultados">Resultados</option>
							<option value="Solicitud de Informacion o Copias Certificadas">Solicitud de Informacion o Copias Certificadas</option>
							<option value="Solicitud de Inpeccion e Informe">Solicitud de Inpeccion e Informe</option>
							<option value="Solicitudes Otras">Solicitudes Otras</option>
							<option value="Tala">Tala</option>
							<option value="Transplantes">Transplantes</option>
							<option value="Voladura">Voladura</option>
						</select>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="form-group">
					<label for="campo_ur" class="col-sm-2 control-label">Unidad Responsable</label>
					<div class="col-sm-5">
						<select name="unidad_responsable" id="campo_ur" class="form-control" required>
							<option value=""></option>
							<option value="GESTION DE AGUAS">GESTION DE AGUAS</option> 
							<option value="GESTION TERRITORIAL">GESTION TERRITORIAL</option> 
							<option value="AUTORIZACIONES AMBIENTALES">AUTORIZACIONES AMBIENTALES</option> 
							<option value="FISCALIZACION Y CONTROL">FISCALIZACION Y CONTROL</option> 
							<option value="ZONAS COSTERAS">ZONAS COSTERAS</option> 
							<option value="CALIDAD AMBIENTAL">CALIDAD AMBIENTAL</option> 
							<option value="DIVERSIDAD BIOLOGICA">DIVERSIDAD BIOLOGICA</option> 
							<option value="EDUCACION AMBIENTAL">EDUCACION AMBIENTAL</option> 
							<option value="DIRECCION">DIRECCION</option>
							<option value="RRHH">RRHH</option> 
                            <option value="MISION ARBOL">MISION ARBOL</option>
							<option value="TAQUILLA UNICA">TAQUILLA UNICA</option>
						</select>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="form-group">
					<label for="campo_respuesta" class="col-sm-2 control-label">Dar Respuesta</label>
					<div class="col-sm-5">
						<select name="respuesta" id="campo_respuesta" required="" class="form-control">
							<option value=""></option>
							<option value="SI">SI</option> 
							<option value="NO">NO</option>
						</select>
					</div>
				</div>
			</div>
			
			<!--<div class="row">
				<div class="form-group">
					<label for="campo_nexpediente" class="col-sm-2 control-label">N° Expediente</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="n_expediente" id="campo_nexpediente" placeholder="N° Expediente" required>
					</div>
				</div>
			</div>-->
			<br>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<input type="hidden"  name="ano" id="ano" value="2016">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 text-right">
					<button class="btn btn-success">Guardar</button>
				</div>
			</div>	
		</form>
	</div>		
</div>		