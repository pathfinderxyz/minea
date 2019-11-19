<?php 
          include '../../coneccion/coneccion.php';

        
	      $tot = pg_query("SELECT COUNT(numero_rd)  as total FROM tramite WHERE estado='Devuelto a' and fecha>='2016/01/01' and unidad_responsable='GESTION TERRITORIAL'");
	      $row1 = pg_fetch_assoc($tot);


          $tot2 = pg_query("SELECT COUNT(numero_rd)  as total2 FROM tramite WHERE estado='Devuelto a' and fecha>='2016/01/01' and unidad_responsable='GESTION DE AGUAS'");
	      $row2 = pg_fetch_assoc($tot2);
          

          $tot3 = pg_query("SELECT COUNT(numero_rd)  as total3 FROM tramite WHERE estado='Devuelto a' and fecha>='2016/01/01' and unidad_responsable='ZONAS COSTERAS'");
	      $row3 = pg_fetch_assoc($tot3);
          

          $tot4 = pg_query("SELECT COUNT(numero_rd)  as total4 FROM tramite WHERE estado='Devuelto a' and fecha>='2016/01/01' and unidad_responsable='FISCALIZACION Y CONTROL'");
	      $row4 = pg_fetch_assoc($tot4);
          

          $tot5 = pg_query("SELECT COUNT(numero_rd)  as total5 FROM tramite WHERE estado='Devuelto a' and fecha>='2016/01/01' and  unidad_responsable='EDUCACION AMBIENTAL'");
	      $row5 = pg_fetch_assoc($tot5);
          

          $tot6 = pg_query("SELECT COUNT(numero_rd)  as total6 FROM tramite WHERE estado='Devuelto a' and fecha>='2016/01/01' and unidad_responsable='CALIDAD AMBIENTAL'");
	      $row6 = pg_fetch_assoc($tot6);
          

          $tot7 = pg_query("SELECT COUNT(numero_rd)  as total7 FROM tramite WHERE estado='Devuelto a' and fecha>='2016/01/01' and unidad_responsable='AUTORIZACIONES AMBIENTALES'");
	      $row7 = pg_fetch_assoc($tot7);
          

          $tot8 = pg_query("SELECT COUNT(numero_rd)  as total8 FROM tramite WHERE estado='Devuelto a' and fecha>='2016/01/01' and unidad_responsable='DIVERSIDAD BIOLOGICA'");
	      $row8 = pg_fetch_assoc($tot8);
          

          $tot9 = pg_query("SELECT COUNT(numero_rd)  as total9 FROM tramite WHERE estado='Devuelto a' and fecha>='2016/01/01'  and unidad_responsable='MISION ARBOL'");
	      $row9 = pg_fetch_assoc($tot9);
          

          $tot10 = pg_query("SELECT COUNT(numero_rd)  as total10 FROM tramite WHERE estado='Devuelto a' and fecha>='2016/01/01' and unidad_responsable='TAQUILLA UNICA'");
	      $row10 = pg_fetch_assoc($tot10);
          

          $tot11 = pg_query("SELECT COUNT(numero_rd)  as total11 FROM tramite WHERE estado='Devuelto a' and fecha>='2016/01/01' and unidad_responsable='DIRECCION'");
	      $row11 = pg_fetch_assoc($tot11);
          

 ?>

<h3><a href="?page=estsol"><span class="glyphicon glyphicon-arrow-left"></span></a>&nbsp&nbspSolicitudes Devueltas para Revision</h3>

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