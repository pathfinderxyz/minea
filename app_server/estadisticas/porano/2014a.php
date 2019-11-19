<?php 
          include '../../coneccion/coneccion.php';

        
	      $tot = pg_query("SELECT COUNT(*) as total FROM tramites_2014 WHERE unidad='COAA-Ordenacion territorio'");
	      $row1 = pg_fetch_assoc($tot);
	      


          $tot2 = pg_query("SELECT COUNT(*) as total2 FROM tramites_2014 WHERE unidad='AGUAS'");
	      $row2 = pg_fetch_assoc($tot2);
          

          $tot3 = pg_query("SELECT COUNT(*) as total3 FROM tramites_2014 WHERE unidad='COAA-Zonas Costeras'");
	      $row3 = pg_fetch_assoc($tot3);
          

          $tot4 = pg_query("SELECT COUNT(*) as total4 FROM tramites_2014 WHERE unidad='COAA-Vigilancia y Control'");
	      $row4 = pg_fetch_assoc($tot4);
          

          $tot5 = pg_query("SELECT COUNT(*) as total5 FROM tramites_2014 WHERE unidad='CONSE-Educacion Ambiental'");
	      $row5 = pg_fetch_assoc($tot5);
          

          $tot6 = pg_query("SELECT COUNT(*) as total6 FROM tramites_2014 WHERE unidad='CONSE-Calidad Ambiental'");
	      $row6 = pg_fetch_assoc($tot6);
          

          $tot7 = pg_query("SELECT COUNT(*) as total7 FROM tramites_2014 WHERE unidad='COAA-Permisiones'");
	      $row7 = pg_fetch_assoc($tot7);
          

          $tot8 = pg_query("SELECT COUNT(*) as total8 FROM tramites_2014 WHERE unidad='CONSE-Diversidad'");
	      $row8 = pg_fetch_assoc($tot8);
          

          $tot9 = pg_query("SELECT COUNT(*) as total9 FROM tramites_2014 WHERE unidad='MISION ARBOL'");
	      $row9 = pg_fetch_assoc($tot9);
          

          $tot10 = pg_query("SELECT COUNT(*) as total10 FROM tramites_2014 WHERE unidad='ASESORIA LEGAL'");
	      $row10 = pg_fetch_assoc($tot10);
          

          $tot11 = pg_query("SELECT COUNT(*) as total11 FROM tramites_2014 WHERE unidad='DIRECCION'");
	      $row11 = pg_fetch_assoc($tot11);
          

 ?>

<h3>Año 2014</h3>

<hr>

														
<div class="row">

	<div class="col-md-6">

	
							<div class="list-group">
								<a href="#" class="list-group-item active">
									Departamento
								</a>
								<a href="#" class="list-group-item">
									<span class="badge"><?php echo $row1['total'];?></span>
									Gestion Territorial
								</a>
								<a href="#" class="list-group-item">
									<span class="badge badge-primary"><?php echo $row2['total2'];?></span>
									Gestion de Aguas
								</a>
								<a href="#" class="list-group-item">
									<span class="badge badge-secondary"><?php echo $row3['total3'];?></span>
									Zonas Costeras
								</a>
								<a href="#" class="list-group-item">
									<span class="badge badge-info"><?php echo $row4['total4'];?></span>
									Fiscalizacion y Control
								</a>
								<a href="#" class="list-group-item">
									<span class="badge badge-success"><?php echo $row5['total5'];?></span>
									Educacion Ambiental
								</a>
								<a href="#" class="list-group-item">
									<span class="badge badge-danger"><?php echo $row6['total6'];?></span>
									Calidad Ambiental
								</a>
								<a href="#" class="list-group-item">
									<span class="badge badge-warning"><?php echo $row7['total7'];?></span>
									Autorizaciones Ambientales
								</a>
								<a href="#" class="list-group-item">
									<span class="badge"><?php echo $row8['total8'];?></span>
									Diversidad Biologica
								</a><a href="#" class="list-group-item">
									<span class="badge badge-primary"><?php echo $row9['total9'];?></span>
									Mision Arbol
								</a>
								<a href="#" class="list-group-item">
									<span class="badge badge-secondary"><?php echo $row10['total10'];?></span>
									Taquilla Unica
								</a>
								<a href="#" class="list-group-item">
									<span class="badge badge-info"><?php echo $row11['total11'];?></span>
									Direccion
								</a>	
							</div>
							
						
		</div>
		
	</div>