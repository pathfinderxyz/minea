
<?php
  include 'coneccion/coneccion.php';

 $sql = pg_query ("SELECT * FROM muebles");
 
 ?>

<div class="row">
	<div class="col-md-12">
		<h1 class="text-center"><small>Lista Actualizada de los muebles 2015</small></h1>
		<div id="lista_tramites" class="dataTables_wrapper form-inline">

			<table class="table table-bordered datatable dataTable" id="table_lista_tramites">
				<thead>
					<tr>
						<th>N° Bien</th>
						<th>ID Provisional</th>
						<th>ID Definitivo</th>
						<th>Descripcion</th>
						<th>Coordinacion Asignada</th>
						<th>Costo</th>
						<th>Opcion</th>
				</thead>
				<tbody>
					<?php
							while ($info = pg_fetch_assoc($sql)) {
								echo '<tr>
										<td>'.$info['N'].'</td>
										<td>'.$info['id_provisional'].'</td>
										<td>'.$info['id_definitivo'].'</td>
										<td>'.$info['descripcion'].'</td>
										<td>'.$info['coordinacion'].'</td>
										<td>'.$info['costo'].'</td>
										<td>
											<button style="margin-bottom: 2px;width: 60px" type="button" onclick="estado  (\''.$info['numero_rd'].'\')" class="btn btn-blue btn-xs">Editar</button>
										</td>
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
		$("#table_lista_tramites").dataTable();
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
</script>