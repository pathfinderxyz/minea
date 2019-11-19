 <?php 
          include '../../coneccion/coneccion.php';

          date_default_timezone_set('America/Caracas');
          $fecha = date('Y-m-d');
          $fatiempo = strtotime ( '-20 day' , strtotime ( $fecha ) ) ;
          $fatiempo = date ( 'Y-m-d' , $fatiempo );
          /*echo $fatiempo;*/

	      $tot = pg_query("SELECT COUNT(numero_rd) as total FROM tramite");
	      $row1 = pg_fetch_assoc($tot);
          /*echo $row1['total'];*/

          $tra = pg_query("SELECT COUNT(numero_rd) as tramitado FROM tramite WHERE estado='Tramitado' and fecha>='2016/01/01'");
          $row2 = pg_fetch_assoc($tra);
          /*echo $row2['tramitado'];*/

          $entra = pg_query("SELECT COUNT(numero_rd) as entramite FROM tramite WHERE estado<>'Tramitado' and fecha>='2016/01/01' and respuesta='SI'");
          $row3 = pg_fetch_assoc($entra);
          /*echo $row3['entramite'];*/

          $dev = pg_query("SELECT COUNT(numero_rd) as devuelto FROM tramite WHERE estado='Devuelto a' and fecha>='2016/01/01'");
          $row4 = pg_fetch_assoc($dev);
          /*echo $row4['devuelto'];*/

          $new = pg_query("SELECT COUNT(numero_rd) as nuevas FROM tramite WHERE fecha = '$fecha' ");
	      $row5 = pg_fetch_assoc($new);
          /*echo $row5['nuevas'];*/

          $atiempo = pg_query("SELECT COUNT(numero_rd) as atiempo FROM tramite WHERE estado='Tramitado' and fecha>='$fatiempo'");
          $row6 = pg_fetch_assoc($atiempo);
          /*echo $row6['atiempo'];*/

          $atrasadas = pg_query("SELECT COUNT(numero_rd) as atrasadas FROM tramite WHERE estado<>'Tramitado' and fecha<='$fatiempo'");
          $row7 = pg_fetch_assoc($atrasadas);
          /*echo $row7['atrasadas'];*/

          $solares = pg_query("SELECT COUNT(numero_rd) as solares FROM tramite WHERE respuesta='SI'");
	      $row8 = pg_fetch_assoc($solares);
          /*echo $row8['solares'];*/

 ?>
<br>
 <h3 >Estadisticas de Solicitudes</h3><hr>

<div class="row">
	<div class="col-sm-3">
	    <a href="?page=estsoltot">
		<div class="tile-stats tile-primary">
			<div class="icon"><i class="entypo-menu"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $row1['total'];?>"  data-duration="1500" data-delay="0">0 </div>
			
			<h3>TOTALES</h3>
			<p>Tramites registrados hasta hoy</p>
		</div></a>
		
	</div>
	
	
	<div class="col-sm-3">
	    <a href="?page=estsoltra">
		<div class="tile-stats tile-green">
			<div class="icon"><i class="entypo-check"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $row2['tramitado'];?>"  data-duration="1500" data-delay="0">0 
			</div>
			<h3>TRAMITADAS</h3>
			<p>Solicitudes respondidas</p>
		</div></a>
		
	</div>
	
	<div class="col-sm-3">
	    <a href="?page=estsolentra">
	    	<div class="tile-stats tile-blue">
			<div class="icon"><i class="entypo-arrows-ccw"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $row3['entramite'];?>"  data-duration="1500" data-delay="0">0 </div>
			
			<h3>EN TRAMITE</h3>
			<p>Solicitudes sin responder</p>
		</div></a>
		
		
	</div>
	
	<div class="col-sm-3">
	    <a href="?page=estsoldev">
	    	<div class="tile-stats tile-red">
			<div class="icon"><i class="entypo-cancel"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $row4['devuelto'];?>"  data-duration="1500" data-delay="0">0 </div>
			
			<h3>DEVUELTAS</h3>
			<p>Necesitan ser revisadas</p>
		</div></a>
		
		
	</div>
</div>

<br>

<div class="row">

	<div class="col-sm-3">
	    <a href="?page=estsolnew">
	    	<div class="tile-stats tile-orange">
			<div class="icon"><i class="entypo-list-add"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $row5['nuevas'];?>"  data-duration="1500" data-delay="0">0 </div>
			
			<h3>NUEVAS</h3>
			<p>Solicitudes hechas hoy</p>
		</div></a>
		
		
	</div>
	
	<div class="col-sm-3">
	    <a href="?page=estsolatiem">
	    	<div class="tile-stats tile-cyan">
			<div class="icon"><i class="entypo-clock"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $row6['atiempo'];?>"  data-duration="1500" data-delay="0">0 </div>
			
			<h3>A TIEMPO</h3>
			<p>Respuestas en el limite establecido</p>
		</div></a>
		
		
	</div>
	
	<div class="col-sm-3">
	    <a href="?page=estsolatras">
	    	<div class="tile-stats tile-plum">
			<div class="icon"><i class="entypo-back-in-time"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $row7['atrasadas'];?>"  data-duration="1500" data-delay="0">0 </div>
			
			<h3>ATRASADAS</h3>
			<p>No respondidas a tiempo</p>
		</div></a>
		
		
	</div>
	
	<div class="col-sm-3">
	    <a href="?page=estsolultmes">
	    	<div class="tile-stats tile-gray">
			<div class="icon"><i class="entypo-volume"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $row8['solares'];?>"  data-duration="1500" data-delay="0">0 </div>
			
			<h3>DAR RESPUESTA</h3>
			<p>Solicitudes a Responder</p>
		</div></a>
		
		
	</div>
</div>