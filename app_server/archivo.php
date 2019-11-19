<?php
  include 'coneccion/coneccion.php';

 $sql = pg_query ("SELECT * FROM expedientes");
 
 ?>

<div class="row">
	<div class="col-md-12">
		<h3>Listado de Expedientes</h3><br>
		<div id="lista_exp" class="dataTables_wrapper form-inline">

			<table class="table table-bordered datatable dataTable" id="table_lista_exp">
				<thead>
					<tr>
						<th>N° Expedientes</th>
						<th>Propietario</th>
						<th>Proyecto</th>
						<th>Año</th>
					</tr>	
				</thead>
				<tbody>
					<?php
							while ($info = pg_fetch_assoc($sql)) {
								echo '<tr>
										<td>'.$info['nexp'].'</td>
										<td>'.$info['propietario'].'</td>
										<td>'.$info['proyecto'].'</td>
										<td>'.$info['año'].'</td>
								</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$("#table_lista_exp").dataTable({
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