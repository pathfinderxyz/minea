<?php  
	session_start();
	include 'coneccion/coneccion.php';
	//include 'head.php';
	if (!$_SESSION['autorizado']) {
	    header('Location: index.php');
	    exit();
	}
	$file = "";//Vista a cargar
	$m_menu = "";
	//Control peticiones por rol
	if ($_SESSION['rol'] == 'tu' || $_SESSION['rol'] == 'da' || $_SESSION['rol'] == 'su') { //lo que hace aqui es preguntar :
		  // si el usuario es tu, da o su entonces si lo que se devolvio por parametros get fue page = xxxxxx entonces llevalo alla 
		if (isset($_GET['page'])) {
			if ($_GET['page'] == 'index') {
				$file = 'vista_registrar_solicitud.php';
				$m_menu = "tu_1";
			}elseif ($_GET['page'] == 'solicitud') {
				$file = 'vista_registrar_solicitud.php';
				$m_menu = "tu_1";
			}elseif ($_GET['page'] == 'tramites') {
				$file = 'vista_tramites.php';
				$m_menu = "gen_t";
			}elseif ($_GET['page'] == 'muebles') {
				$file = 'muebles.php';	
			}elseif ($_GET['page'] == '2015') {
				$file = 'tramites/tram2015.php';	
			}elseif ($_GET['page'] == '2014') {
				$file = 'tramites/tram2014.php';	
			}elseif ($_GET['page'] == '2013') {
				$file = 'tramites/tram2013.php';	
			}elseif ($_GET['page'] == 'estsol') {
				$file = 'estadisticas/estsol.php';	
			}elseif ($_GET['page'] == 'estdep') {
				$file = 'estadisticas/estdep.php';	
			}elseif ($_GET['page'] == 'estsoltot') {
				$file = 'estadisticas/estsol/estsoltot.php';	
			}elseif ($_GET['page'] == 'estsoltra') {
				$file = 'estadisticas/estsol/estsoltra.php';	
			}elseif ($_GET['page'] == 'estsolentra') {
				$file = 'estadisticas/estsol/estsolentra.php';	
			}elseif ($_GET['page'] == 'estsoldev') {
				$file = 'estadisticas/estsol/estsoldev.php';	
			}elseif ($_GET['page'] == 'estsolnew') {
				$file = 'estadisticas/estsol/estsolnew.php';	
			}elseif ($_GET['page'] == 'estsolatiem') {
				$file = 'estadisticas/estsol/estsolatiem.php';	
			}elseif ($_GET['page'] == 'estsolatras') {
				$file = 'estadisticas/estsol/estsolatras.php';	
			}elseif ($_GET['page'] == 'estsolultmes') {
				$file = 'estadisticas/estsol/estsolultmes.php';	
			}elseif ($_GET['page'] == 'aa') {
				$file = 'estadisticas/estdep/aa.php';	
			}elseif ($_GET['page'] == 'ca') {
				$file = 'estadisticas/estdep/ca.php';	
			}elseif ($_GET['page'] == 'db') {
				$file = 'estadisticas/estdep/db.php';	
			}elseif ($_GET['page'] == 'ea') {
				$file = 'estadisticas/estdep/ea.php';	
			}elseif ($_GET['page'] == 'fc') {
				$file = 'estadisticas/estdep/fc.php';	
			}elseif ($_GET['page'] == 'ga') {
				$file = 'estadisticas/estdep/ga.php';	
			}elseif ($_GET['page'] == 'gt') {
				$file = 'estadisticas/estdep/gt.php';	
			}elseif ($_GET['page'] == 'zc') {
				$file = 'estadisticas/estdep/zc.php';	
			}elseif ($_GET['page'] == 'porano') {
				$file = 'estadisticas/porano.php';	
			}elseif ($_GET['page'] == 'tradep') {
				$file = 'reportes/tradep.php';	
			}elseif ($_GET['page'] == 'tipsol') {
				$file = 'reportes/tipsol.php';	
			}elseif ($_GET['page'] == '2016a') {
				$file = 'estadisticas/porano/2016a.php';	
			}elseif ($_GET['page'] == '2015a') {
				$file = 'estadisticas/porano/2015a.php';	
			}elseif ($_GET['page'] == '2014a') {
				$file = 'estadisticas/porano/2014a.php';	
			}elseif ($_GET['page'] == '2013a') {
				$file = 'estadisticas/porano/2013a.php';	
			}elseif ($_GET['page'] == 'archivo') {
				$file = 'archivo.php';	
			}elseif ($_GET['page'] == 'camexp') {
				$file = 'configuracion/camexp.php';	
			}elseif ($_GET['page'] == 'editexp') {
				$file = 'configuracion/editexp.php';	
			}elseif ($_GET['page'] == 'actexp') {
				$file = 'configuracion/actexp.php';	
			}elseif ($_GET['page'] == 'imprimir2') {
				$file = 'reportes/imprimir.php';	
			}

		}else{
			$file = 'vista_registrar_solicitud.php';
			$m_menu = "tu_1";
		}
	}elseif ($_SESSION['rol'] == 'ag' || $_SESSION['rol'] == 'ma' || $_SESSION['rol'] == 'pa' || $_SESSION['rol'] == 'zc' || $_SESSION['rol'] == 'fc' || $_SESSION['rol'] == 'rd' || $_SESSION['rol'] == 'ca' || $_SESSION['rol'] == 'aa' || $_SESSION['rol'] == 'db') {//Aguas
		if (isset($_GET['page'])) {
			if ($_GET['page'] == "index") {
				$file = 'vista_tramites.php';
				$m_menu = "gen_t";
			}elseif ($_GET['page'] == 'tramites') {
				$file = 'vista_tramites.php';
				$m_menu = "gen_t";
			}elseif ($_GET['page'] == '2015') {
				$file = 'tramites/tram2015.php';	
			}elseif ($_GET['page'] == '2014') {
				$file = 'tramites/tram2014.php';	
			}elseif ($_GET['page'] == '2013') {
				$file = 'tramites/tram2013.php';	
			}elseif ($_GET['page'] == 'estsol') {
				$file = 'estadisticas/estsol.php';	
			}elseif ($_GET['page'] == 'estdep') {
				$file = 'estadisticas/estdep.php';	
			}elseif ($_GET['page'] == 'estsoltot') {
				$file = 'estadisticas/estsol/estsoltot.php';	
			}elseif ($_GET['page'] == 'estsoltra') {
				$file = 'estadisticas/estsol/estsoltra.php';	
			}elseif ($_GET['page'] == 'estsolentra') {
				$file = 'estadisticas/estsol/estsolentra.php';	
			}elseif ($_GET['page'] == 'estsoldev') {
				$file = 'estadisticas/estsol/estsoldev.php';	
			}elseif ($_GET['page'] == 'estsolnew') {
				$file = 'estadisticas/estsol/estsolnew.php';	
			}elseif ($_GET['page'] == 'estsolatiem') {
				$file = 'estadisticas/estsol/estsolatiem.php';	
			}elseif ($_GET['page'] == 'estsolatras') {
				$file = 'estadisticas/estsol/estsolatras.php';	
			}elseif ($_GET['page'] == 'estsolultmes') {
				$file = 'estadisticas/estsol/estsolultmes.php';	
			}elseif ($_GET['page'] == 'aa') {
				$file = 'estadisticas/estdep/aa.php';	
			}elseif ($_GET['page'] == 'ca') {
				$file = 'estadisticas/estdep/ca.php';	
			}elseif ($_GET['page'] == 'db') {
				$file = 'estadisticas/estdep/db.php';	
			}elseif ($_GET['page'] == 'ea') {
				$file = 'estadisticas/estdep/ea.php';	
			}elseif ($_GET['page'] == 'fc') {
				$file = 'estadisticas/estdep/fc.php';	
			}elseif ($_GET['page'] == 'ga') {
				$file = 'estadisticas/estdep/ga.php';	
			}elseif ($_GET['page'] == 'gt') {
				$file = 'estadisticas/estdep/gt.php';	
			}elseif ($_GET['page'] == 'zc') {
				$file = 'estadisticas/estdep/zc.php';	
			}elseif ($_GET['page'] == 'porano') {
				$file = 'estadisticas/porano.php';	
			}elseif ($_GET['page'] == 'tradep') {
				$file = 'reportes/tradep.php';	
			}elseif ($_GET['page'] == 'tipsol') {
				$file = 'reportes/tipsol.php';	
			}elseif ($_GET['page'] == '2016a') {
				$file = 'estadisticas/porano/2016a.php';	
			}elseif ($_GET['page'] == '2015a') {
				$file = 'estadisticas/porano/2015a.php';	
			}elseif ($_GET['page'] == '2014a') {
				$file = 'estadisticas/porano/2014a.php';	
			}elseif ($_GET['page'] == '2013a') {
				$file = 'estadisticas/porano/2013a.php';	
			}elseif ($_GET['page'] == 'archivo') {
				$file = 'archivo.php';	
			}
		}else{
			$file = 'vista_tramites.php';
			$m_menu = "gen_t";
		}	
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	<title>MINEA</title>
	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">
	<link rel="stylesheet" href="assets/css/neon.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body class="page-body" data-url="http://neon.dev">
     
         <!-- encabezado con cintillo -->


         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12" align="center">
         		     <img src="assets/images/cintillo5.jpg" class="img-responsive img-rounded " >
         	 </div>
         
         </div>



	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
		
       <!-- este es el navbar-->

		<div class="sidebar-menu">
			<header class="logo-env">
				<!-- logo -->
				<div class="logo">
					
						<h3  style="font-size: 30px;margin-left: -4px;margin-top: 0px;font-weight: bold;color: #FFFFFF;">MINEA NE</h3>
					
				</div>
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>
			</header>
			<ul id="main-menu" class="">
				<?php  
					if ($_SESSION['rol'] == 'tu' || $_SESSION['rol'] == 'da' || $_SESSION['rol'] == 'su') {
						$tu_1 = "";
						if ($m_menu == "tu_1"){
							$tu_1 = "active";
						}
						echo '<li class="'.$tu_1.'">
								<a href="?page=solicitud">
									<i class="glyphicon glyphicon-floppy-save"></i>
									<span>Registrar Solicitud</span>
								</a>
							</li>';
					}
				?>
				<?php  
					$gen_t = "";
					if ($m_menu == "gen_t") {//Menu de la lista de tramites
						$gen_t = "active";
					}
				?>
				<li>
				     <a href="index.html">
					     <i class="glyphicon glyphicon-file"></i>
					     <span>Trámites</span>
				     </a>
				     <ul>
					     <li class="<?php echo $gen_t ?>">
					         <a href="?page=tramites">
						         <!--<i class="glyphicon glyphicon-minus"></i>-->
						         <span>2016</span>
					         </a>
				         </li>
				         <li >
				              <a href="?page=2015">
						         <!--<i class="glyphicon glyphicon-minus"></i>-->
						         <span>2015</span>
					         </a>
				         </li>
					     <li>
					         <a href="?page=2014">
						         <!--<i class="glyphicon glyphicon-stats"></i>-->
						         <span>2014</span>
					         </a>
				         </li>
					     <li>
					         <a href="?page=2013">
						         <!--<i class="glyphicon glyphicon-stats"></i>-->

						         <span>2013</span>
					         </a>
				         </li>
				     </ul>
			    </li>
			    <li>
					<a href="?page=archivo">
						<i class="glyphicon glyphicon-folder-close"></i>
						<span>Archivo</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="glyphicon glyphicon-stats"></i>
						<span>Estadísticas</span>
					</a>
					<ul> 
				         <li >
				              <a href="?page=estsol">
						         <!--<i class="glyphicon glyphicon-minus"></i>-->
						         <span>Solicitudes</span>
					         </a>
				         </li>
					     <li>
					         <a href="?page=estdep">
						         <!--<i class="glyphicon glyphicon-stats"></i>-->
						         <span>Departamentos</span>
					         </a>
				         </li>
				         <li >
				              <a href="?page=porano">
						         <!--<i class="glyphicon glyphicon-minus"></i>-->
						         <span>Por Año</span>
					         </a>
				         </li>
				     </ul>
				</li>
				<li>
					<a href="#">
						<i class="glyphicon glyphicon-export"></i>
						<span>Reportes</span>
					</a>
					<ul> 
					     <li >
				              <a href="?page=tradep">
						         <!--<i class="glyphicon glyphicon-minus"></i>-->
						         <span>Solicitudes y Departamentos </span>
					         </a>
				         </li>
					     <li>
					         <a href="?page=tipsol">
						         <!--<i class="glyphicon glyphicon-stats"></i>-->
						         <span>Trámites</span>
					         </a>
				         </li>
				     </ul>    
				</li>
				<!--<li>
					<a href="#">
						<i class="glyphicon glyphicon-folder-open"></i>
						<span>Administracion</span>
					</a>
					<ul>
					     <li>
					         <a href="#">
						         <span>Bienes</span>
					         </a>
					         <ul>
					     <li>
					       
					         <a href="?page=muebles">
						         <span>Muebles</span>
					         </a>
				         </li>
					     <li>
					         <a href="#">
						         <span>Inmuebles</span>
					         </a>
				         </li>
				     </ul>
				         </li>
					     <li>
					         <a href="#">
						         <span>Reportes</span>
					         </a>
				         </li>
				     </ul>
				</li>-->
				<li>
					<a href="#">
						<i class="glyphicon glyphicon-cog"></i>
						<span>Configuración</span>
					</a>
					<ul> 
				         <li >
				              <a href="?page=camexp">
						         <!--<i class="glyphicon glyphicon-minus"></i>-->
						         <span>Cambiar N# de Expediente</span>
					         </a>
				         </li>
					     
				     </ul>
				</li>
				<!--<li>
					<a href="#">
						<i class="glyphicon glyphicon-tasks"></i>
						<span>Historial</span>
					</a>
				</li>-->
				<li>
					<a href="salir.php">
						<i class="fa fa-power-off"></i>
						<span>Salir</span>
					</a>
				</li>
			</ul>	
		</div>

                     

       <!-- este es el contenido de la pagina-->
        
		 <div class="main-content">
      
             <div  align="right">

             <ol class="breadcrumb" >
                  <li><a href="?page=tramites" class="mitooltip" title="Trámites Actuales" data-placement="top"><span class="glyphicon glyphicon-file"> </span></a></li>
                  <li><a href="?page=archivo" class="mitooltip" title="Archivo" data-placement="top"><span class="glyphicon glyphicon-search"> </span></a></li>
                  <li><a href="?page=solicitud" class="mitooltip" title="Registrar un trámite" data-placement="top"><span class="glyphicon glyphicon-plus"> &nbsp&nbsp&nbsp</span></a></li>
                  
              </ol>
             </div>
			 <?php  
				include 'app_server/'.$file;
			 ?>
			 <footer class="main text-center">
				&copy; 2016 <strong></strong> Ministerio del Poder Popular Para el Ecosocialismo y Aguas.
			 </footer>	
		 </div>
	</div>
	<!-- Bottom Scripts -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/neon-demo.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/datatables/TableTools.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.js"></script>
	<script src="assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="assets/js/datatables/responsive/js/datatables.responsive.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="app_js/funciones.js"></script>
</body>
</html>