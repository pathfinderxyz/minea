<?php 
          include '../../coneccion/coneccion.php';


	      $tot = pg_query("SELECT COUNT(numero_rd) as total FROM tramite");
	      $row1 = pg_fetch_assoc($tot);
          /*echo $row1['total'];*/

          $tot2 = pg_query("SELECT COUNT(*) as total2 FROM tramites_2015");
	      $row12 = pg_fetch_assoc($tot2);
          /*echo $row12['total2'];*/

          $tot3 = pg_query("SELECT COUNT(*) as total3 FROM tramites_2014");
	      $row13 = pg_fetch_assoc($tot3);
          /*echo $row13['total3'];*/

          $tot4 = pg_query("SELECT COUNT(*) as total4 FROM tramites_2013");
	      $row14 = pg_fetch_assoc($tot4);
          /*echo $row14['total4'];*/
          
 ?>



 <h3 >Estadisticas por Año</h3><hr>

<div class="row">
	<div class="col-sm-3">
	    <a href="?page=2016a">
		<div class="tile-stats tile-green">
			<div class="icon"><i class="entypo-menu"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $row1['total']; ?>"  data-duration="1500" data-delay="0">0</div>
			
			<h3>AÑO 2016</h3>
			
		</div></a>
		
	</div>
	
	<div class="col-sm-3">
	    <a href="?page=2015a">
		<div class="tile-stats tile-red">
			<div class="icon"><i class="entypo-check"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $row12['total2']; ?>"  data-duration="1500" data-delay="0">0</div>
			
			<h3>AÑO 2015</h3>
			
		</div></a>
		
	</div>
	
	<div class="col-sm-3">
	    <a href="?page=2014a">
	    	<div class="tile-stats tile-blue">
			<div class="icon"><i class="entypo-arrows-ccw"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $row13['total3']; ?>" data-duration="1500" data-delay="0">0</div>
			
			<h3>AÑO 2014</h3>
			
		</div></a>
		
		
	</div>
	
	<div class="col-sm-3">
	    <a href="?page=2013a">
	    	<div class="tile-stats tile-gray">
			<div class="icon"><i class="entypo-cancel"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $row14['total4']; ?>"  data-duration="1500" data-delay="0">0</div>
			
			<h3>AÑO 2013</h3>
			
		</div></a>
		
		
	</div>
</div>