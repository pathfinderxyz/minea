<?php  
	include 'coneccion/coneccion.php';
	session_start();
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];

	$sql = pg_query("select * from usuarios where usuario = '$usuario' and password = '$pass'");
	$row = pg_num_rows($sql);
	if ($row) {
		$info = pg_fetch_assoc($sql);
		$_SESSION['user'] = $info['usuario'];
		$_SESSION['rol'] = $info['rol'];
		$_SESSION['autorizado'] = true;
		switch ($_SESSION['rol']) {
			case 'ag':
				$_SESSION['filtro'] = "GESTION DE AGUAS";
				break;
			case 'ma':
				$_SESSION['filtro'] = "MISION ARBOL";
				break;
			case 'pa':
				$_SESSION['filtro'] = "GESTION TERRITORIAL";
				break;
			case 'zc':
				$_SESSION['filtro'] = "ZONAS COSTERAS";
				break;	
			case 'fc':
				$_SESSION['filtro'] = "FISCALIZACION Y CONTROL";
				break;
			case 'rd':
				$_SESSION['filtro'] = "EDUCACION AMBIENTAL";
				break;
			case 'ca':
				$_SESSION['filtro'] = "CALIDAD AMBIENTAL";
				break;
			case 'aa':
				$_SESSION['filtro'] = "AUTORIZACIONES AMBIENTALES";
				break;
			case 'db':
				$_SESSION['filtro'] = "DIVERSIDAD BIOLOGICA";
				break;
			case 'db':
				$_SESSION['filtro'] = "ALL";
				break;
			case 'su':
				$_SESSION['filtro'] = "ALL";
				break;
			case 'tu':
				$_SESSION['filtro'] = "ALL";
				break;
		}
		echo json_encode(array('resp'=>1));
		exit();
	}else {
		echo json_encode(array('resp'=>0));
		exit();
	}
?>