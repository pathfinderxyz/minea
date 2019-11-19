<?php  
	include '../coneccion/coneccion.php';
	$nombre = $_POST['nombre'];
	$cedula = $_POST['cedula'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$telefono2 = $_POST['telefono2'] != '' ? $_POST['telefono2'] : '';
	$municipio = $_POST['municipio'];
	$tramite = $_POST['tramite'];
	$ur = $_POST['unidad_responsable'];
	$respuesta = $_POST['respuesta'];
	/*$ne = $_POST['n_expediente'];*/
	$estado = "Nuevo";
	date_default_timezone_set('America/Caracas');
    $fecha = date('Y-m-d');
    $aecurso = $_POST['ano'];

	
	$sql = pg_query("INSERT INTO tramite (nombre_solicitante,cedula,email,telefono,telefono2,municipio,tramite,unidad_responsable,fecha,respuesta,estado) VALUES ('$nombre','$cedula','$email','$telefono','$telefono2','$municipio','$tramite','$ur','$fecha','$respuesta','$estado')");

    $sql2 = pg_query("INSERT INTO expedientes (propietario,proyecto,año) VALUES ('$nombre','$tramite','$aecurso')");


	if ($sql) {

		header('Location: ../inicio.php?page=solicitud&mensaje=1');//Se guardo
	}else {
		header('Location: ../inicio.php?page=solicitud&mensaje=0');//No se guardo
	}

?>