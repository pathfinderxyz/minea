<?php
  include 'coneccion/coneccion.php';

 $sql = pg_query ("SELECT * FROM tramites_2014");
 
 ?>

<div class="row">
	<div class="col-md-12">
		<h3>Lista de Trámites 2014</h3><br>
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
					</tr>	
				</thead>
				<tbody>
					<?php
							while ($info = pg_fetch_assoc($sql)) {
								echo '<tr>
										<td>'.$info['RD'].'</td>
										<td>'.$info['Nombre'].'</td>
										<td>'.$info['telefono'].'</td>
										<td>'.$info['municipio'].'</td>
										<td>'.$info['Solicitud'].'</td>
										<td>'.$info['unidad'].'</td>
										<td>'.$info['fecha'].'</td>
										<td>'.$info['expediente'].'</td>	
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