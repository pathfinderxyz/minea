<?php 
	if ($_SESSION['filtro'] != "ALL") {
		$f = $_SESSION['filtro'];
		$sql = pg_query("select * from tramite where unidad_responsable = '$f'");
	}else{
		$sql = pg_query("select * from tramite");
	}	
	$row = pg_num_rows($sql);
	$tr = "";
?>


<div class="row">
	<div class="col-md-12">
		<h3>Lista de Trámites 2016</h3><br>
		<div id="lista_tramites" class="dataTables_wrapper form-inline">

			<table class="table table-bordered datatable dataTable" id="table_lista_tramites">
				<thead>
					<tr>
						<th>N° RD</th>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Municipio</th>
						<th>Tramite</th>
						<th>Unidad</th>
						<th>Fecha</th>
						<th>N° Expediente</th>
						<th>Acciones</th>
					</tr>	
				</thead>
				<tbody>
					<?php
						if ($row) {
							while ($info = pg_fetch_assoc($sql)) {
								echo '<tr>
										<td>'.$info['numero_rd'].'</td>
										<td>'.$info['nombre_solicitante'].'</td>
										<td>'.$info['telefono'].'</td>
										<td>'.$info['municipio'].'</td>
										<td>'.$info['tramite'].'</td>
										<td>'.$info['unidad_responsable'].'</td>
										<td>'.$info['fecha'].'</td>
										<td>'.$info['n_expediente'].'</td>
										<td>
											<button style="margin-bottom: 2px;width: 60px" type="button" onclick="estado  (\''.$info['numero_rd'].'\')" class="btn btn-blue btn-xs">Estado</button>
											<button style="margin-bottom: 2px;width: 60px;background-color: #F44336" type="button" onclick="enviar(\''.$info['numero_rd'].'\')"  class="btn btn-red btn-xs">Enviar</button>
											<button style="margin-bottom: 2px;width: 60px" type="button" onclick="historial(\''.$info['numero_rd'].'\')" class="btn btn-green btn-xs">Historial</button>
										</td>
								</tr>';
							}
						}else{

						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$("#table_lista_tramites").dataTable({
			oLanguage: {
				sSearch: "Buscar",
				sEmptyTable: "No hay Registros",
				oPaginate: {
					sFirst: "Primera",
					sLast: "Ultima",
					sNext: "Siguiente",
					sPrevious: "Anterior"
				},
				sLengthMenu: "Mostrar _MENU_ registros",
				sInfoEmpty:"Mostrando 0 entradas",
				sInfo:"Mostrando _START_ de _END_ de _TOTAL_ entradas"
			}
		});
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
</script>