<?php  
	include '../../coneccion/coneccion.php';
	

	$exp1 = $_POST['newexp'];
	$ne = $_POST['n_expediente'];

	
	$sql = pg_query(" UPDATE tramite set n_expediente='$ne' where n_expediente= '$exp1' ");

	$sql2 = pg_query(" UPDATE expedientes set nexp='$ne' where nexp= '$exp1' ");     

	if ($sql) {

		header('Location: ../../inicio.php?page=editexp&mensaje=1');//Se guardo
	}else {
		header('Location: ../../inicio.php?page=editexp&mensaje=0');//No se guardo
	}

?>