<?php 
          include '../../coneccion/coneccion.php';

          date_default_timezone_set('America/Caracas');
          $fecha = date('Y-m-d');
          $fatiempo = strtotime ( '-20 day' , strtotime ( $fecha ) ) ;
          $fatiempo = date ( 'Y-m-d' , $fatiempo );
          /*echo $fatiempo;*/

          $totge2 = pg_query("SELECT COUNT(numero_rd)  as totalge2 FROM tramite WHERE estado='Tramitado' and fecha>='2016/01/01' and unidad_responsable='GESTION TERRITORIAL'");
	      $row1ge2 = pg_fetch_assoc($totge2);

	      $totge = pg_query("SELECT COUNT(numero_rd) as totalge FROM tramite WHERE respuesta='SI' and unidad_responsable='GESTION TERRITORIAL'");
	      $row1ge = pg_fetch_assoc($totge);

          

          /*-------------------------------------------------*/

          $tot4fc = pg_query("SELECT COUNT(numero_rd)  as total4fc FROM tramite WHERE estado='Tramitado' and fecha>='2016/01/01' and unidad_responsable='FISCALIZACION Y CONTROL'");
	      $row4fc = pg_fetch_assoc($tot4fc);

	      $tot4fc2 = pg_query("SELECT COUNT(numero_rd) as total4fc2 FROM tramite WHERE respuesta='SI' and unidad_responsable='FISCALIZACION Y CONTROL'");
	      $row4fc2 = pg_fetch_assoc($tot4fc2);

	      

	      /*-------------------------------------------------*/

	      $tot2ga = pg_query("SELECT COUNT(numero_rd)  as total2ga FROM tramite WHERE estado='Tramitado' and fecha>='2016/01/01' and unidad_responsable='GESTION DE AGUAS'");
	      $row2ga = pg_fetch_assoc($tot2ga);

	      $tot2ga2 = pg_query("SELECT COUNT(numero_rd) as total2ga2 FROM tramite WHERE respuesta='SI' and unidad_responsable='GESTION DE AGUAS'");
	      $row2ga2 = pg_fetch_assoc($tot2ga2);

	      

	      /*-------------------------------------------------*/

	      $tot8db = pg_query("SELECT COUNT(numero_rd)  as total8db FROM tramite WHERE estado='Tramitado' and fecha>='2016/01/01' and unidad_responsable='DIVERSIDAD BIOLOGICA'");
	      $row8db = pg_fetch_assoc($tot8db);

	      $tot8db2 = pg_query("SELECT COUNT(numero_rd) as total8db2 FROM tramite WHERE respuesta='SI' and unidad_responsable='DIVERSIDAD BIOLOGICA'");
	      $row8db2 = pg_fetch_assoc($tot8db2);

	      

	      /*-------------------------------------------------*/

	      $tot6ca = pg_query("SELECT COUNT(numero_rd)  as total6ca FROM tramite WHERE estado='Tramitado' and fecha>='2016/01/01' and unidad_responsable='CALIDAD AMBIENTAL'");
	      $row6ca = pg_fetch_assoc($tot6ca);

	      $tot6ca2 = pg_query("SELECT COUNT(numero_rd) as total6ca2 FROM tramite WHERE respuesta='SI' and unidad_responsable='CALIDAD AMBIENTAL'");
	      $row6ca2 = pg_fetch_assoc($tot6ca2);

	     

	      /*-------------------------------------------------*/

	      $tot7aa = pg_query("SELECT COUNT(numero_rd)  as total7aa FROM tramite WHERE estado='Tramitado' and fecha>='2016/01/01' and unidad_responsable='AUTORIZACIONES AMBIENTALES'");
	      $row7aa = pg_fetch_assoc($tot7aa);

	      $tot7aa2 = pg_query("SELECT COUNT(numero_rd) as total7aa2 FROM tramite WHERE respuesta='SI' and unidad_responsable='AUTORIZACIONES AMBIENTALES'");
	      $row7aa2 = pg_fetch_assoc($tot7aa2);

	      

	      /*-------------------------------------------------*/

	      $tot5ea = pg_query("SELECT COUNT(numero_rd)  as total5ea FROM tramite WHERE estado='Tramitado' and fecha>='2016/01/01' and  unidad_responsable='EDUCACION AMBIENTAL'");
	      $row5ea = pg_fetch_assoc($tot5ea);

	      $tot5ea2 = pg_query("SELECT COUNT(numero_rd) as total5ea2 FROM tramite WHERE respuesta='SI' and unidad_responsable='EDUCACION AMBIENTAL'");
	      $row5ea2 = pg_fetch_assoc($tot5ea2);

	      

	      /*-------------------------------------------------*/

	      $tot3zc = pg_query("SELECT COUNT(numero_rd)  as total3zc FROM tramite WHERE estado='Tramitado' and fecha>='2016/01/01' and unidad_responsable='ZONAS COSTERAS'");
	      $row3zc = pg_fetch_assoc($tot3zc);

	      $tot3zc2 = pg_query("SELECT COUNT(numero_rd) as total3zc2 FROM tramite WHERE respuesta='SI' and unidad_responsable='ZONAS COSTERAS'");
	      $row3zc2 = pg_fetch_assoc($tot3zc2);

	      

 ?>

<h3> Departamentos </h3>

<hr>

 <div class="row">
	 <div class="col-sm-3">
	     <a href="#">
		 <div class="tile-progress tile-primary">
			
			 <div class="tile-header">
				<h3>Gestion Territorial</h3>
				
			  </div>
			
			 <div class="tile-progressbar">
				<span data-fill="<?php echo round(($row1ge2['totalge2']/$row1ge['totalge'])*100);?>"></span>
			 </div>
			
			 <div class="tile-footer">
				<h4>
					<span class="pct-counter">0</span>% Efectividad
				</h4>
				
				<span>Porcentaje respondido</span>
			 </div>
		 </div></a>
	
	 </div>
	
	 <div class="col-sm-3">
	    <a href="#"><div class="tile-progress tile-orange">
			
			<div class="tile-header">
				<h3>Fisc. y Control</h3>
				
			</div>
			
			<div class="tile-progressbar">
				<span data-fill="<?php echo round(($row4fc['total4fc']/$row4fc2['total4fc2'])*100);?>"></span>
			</div>
			
			<div class="tile-footer">
				<h4>
					<span class="pct-counter">0</span>% Efectividad
				</h4>
				
				<span>Porcentaje respondido</span>
			</div>
		</div></a>
		
	
	</div>
	
	<div class="col-sm-3">
	 <a href="#"><div class="tile-progress tile-blue">
			
			<div class="tile-header">
				<h3>Gestion de Aguas</h3>
				
			</div>
			
			<div class="tile-progressbar">
				<span data-fill="<?php echo round(($row2ga['total2ga']/$row2ga2['total2ga2'])*100);?>"></span>
			</div>
			
			<div class="tile-footer">
				<h4>
					<span class="pct-counter">0</span>% Efectividad
				</h4>
				
				<span>Porcentaje respondido</span>
			</div>
		</div></a>
		
	
	</div>
	
	<div class="col-sm-3">
	<a href="#"><div class="tile-progress tile-green">
			
			<div class="tile-header">
				<h3>Diversidad Biologica</h3>
				
			</div>
			
			<div class="tile-progressbar">
				<span data-fill="<?php echo round(($row8db['total8db']/$row8db2['total8db2'])*100);?>"></span>
			</div>
			
			<div class="tile-footer">
				<h4>
					<span class="pct-counter">0</span>% Efectividad
				</h4>
				
				<span>Porcentaje respondido</span>
			</div>
		</div></a>
		
	
	</div>
</div>

<div class="row">

	<div class="col-sm-3">
	<a href="#"><div class="tile-progress tile-red">
			
			<div class="tile-header">
				<h3>Calidad Ambiental</h3>
				
			</div>
			
			<div class="tile-progressbar">
				<span data-fill="<?php echo round(($row6ca['total6ca']/$row6ca2['total6ca2'])*100);?>"></span>
			</div>
			
			<div class="tile-footer">
				<h4>
					<span class="pct-counter">0</span>% Efectividad
				</h4>
				
				<span>Porcentaje respondido</span>
			</div>
		</div></a>
		
	
	</div>
	
	<div class="col-sm-3">
	<a href="#"><div class="tile-progress tile-cyan">
			
			<div class="tile-header">
				<h3>Aut. Ambientales</h3>
				
			</div>
			
			<div class="tile-progressbar">
				<span data-fill="<?php echo round(($row7aa['total7aa']/$row7aa2['total7aa2'])*100);?>"></span>
			</div>
			
			<div class="tile-footer">
				<h4>
					<span class="pct-counter">0</span>% Efectividad
				</h4>
				
				<span>Porcentaje respondido</span>
			</div>
		</div></a>
		
	
	</div>
	
	<div class="col-sm-3">
	<a href="#"><div class="tile-progress tile-plum">
			
			<div class="tile-header">
				<h3>Educacion Ambiental</h3>
				
			</div>
			
			<div class="tile-progressbar">
				<span data-fill="<?php echo round(($row5ea['total5ea']/$row5ea2['total5ea2'])*100);?>"></span>
			</div>
			
			<div class="tile-footer">
				<h4>
					<span class="pct-counter">0</span>% Efectividad
				</h4>
				
				<span>Porcentaje respondido</span>
			</div>
		</div></a>
		
	
	</div>
	
	<div class="col-sm-3">
	<a href="#"><div class="tile-progress tile-gray">
			
			<div class="tile-header">
				<h3>Zonas Costeras</h3>
				
			</div>
			
			<div class="tile-progressbar">
				<span data-fill="<?php echo round(($row3zc['total3zc']/$row3zc2['total3zc2'])*100);?>"></span>
			</div>
			
			<div class="tile-footer">
				<h4>
					<span class="pct-counter">0</span>% Efectividad
				</h4>
				
				<span>Porcentaje respondido</span>
			</div>
		</div></a>
		
	
	</div>
</div>	
	
</div>