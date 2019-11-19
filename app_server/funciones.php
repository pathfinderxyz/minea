<?php 
	include '../coneccion/coneccion.php';


	function list_dpto_tra($mi_dpto){
		global $list_dpto;
		$d = array();
		for ($i=0; $i < count($list_dpto); $i++) { 
			if ($list_dpto[$i] != $mi_dpto) {
				array_push($d, $list_dpto[$i]);
			}
		}
		return $d;
	}

	function list_estado_tra($mi_estado){
		global $list_estados;
		$d = array();
		for ($i=0; $i < count($list_estados); $i++) { 
			if ($list_estados[$i] != $mi_estado) {
				array_push($d, $list_estados[$i]);
			}
		}
		return $d;
	}

	function obtener_historial(){
		$id = $_POST['id'];
		$sql = pg_query("SELECT * FROM log_tramite  WHERE id_tramite = '$id' ORDER BY fecha DESC");
		$row = pg_num_rows($sql);
		if ($row) {
			$data = array();
			while ($info = pg_fetch_assoc($sql)) {
				array_push($data, $info);
			}
			echo json_encode(array('status'=>1,'log'=>$data));
		}else{//No hay Log para este tramite
			echo json_encode(array('status'=>0));
		}
	}

	function cambiar_dpto(){
		$id = $_POST['id'];
		$dpto = $_POST['dpto'];

		$sql = pg_query("UPDATE tramite SET unidad_responsable = '$dpto' WHERE numero_rd = '$id'");
		if ($sql) {
			echo json_encode(array('status'=>1));
			//Inert log
			date_default_timezone_set('America/Caracas');
			$d = date("Y-m-d H:i:s");
			$e = "Enviado a";
			$sql_lg = pg_query("INSERT INTO log_tramite (unidad_responsable,id_tramite,fecha,estado) VALUES ('$dpto','$id','$d','$e')");
		}else{
			echo json_encode(array('status'=>0));
		}

		//Guardar
	}

	function cambiar_estado(){
		$id = $_POST['id'];
		$estado = $_POST['estado'];

		$sql = pg_query("UPDATE tramite SET estado = '$estado' WHERE numero_rd = '$id'");

		if ($sql) {

			$dpto = "";
			$sql_dpto = pg_query("SELECT unidad_responsable FROM tramite WHERE numero_rd = '$id'");
			if (pg_num_rows($sql_dpto)) {
				$dpto = pg_fetch_assoc($sql_dpto)['unidad_responsable'];
			}
			date_default_timezone_set('America/Caracas');
			$d = date("Y-m-d H:i:s");
			$sql_lg = pg_query("INSERT INTO log_tramite (unidad_responsable,id_tramite,fecha,estado) VALUES ('$dpto','$id','$d','$estado')");
			echo json_encode(array('status'=>1));
		}else{
			echo json_encode(array('status'=>0));
		}
	}

	function obtene_mi_departamento(){
		$id = $_POST['id'];

		$sql = pg_query("SELECT unidad_responsable FROM tramite WHERE numero_rd = '$id'");
		$row = pg_num_rows($sql);

		if ($row) {
			$dpto = pg_fetch_assoc($sql)['unidad_responsable'];
			$info = list_dpto_tra($dpto);

			echo json_encode(array('status' => 1,'info'=>$info));
		}else{
			echo json_encode(array('status' => 0));
		}
	}

	function obtene_mi_estado(){
		$id = $_POST['id'];

		$sql = pg_query("SELECT estado FROM tramite WHERE numero_rd = '$id'");
		$row = pg_num_rows($sql);

		if ($row) {
			$estado = pg_fetch_assoc($sql)['estado'];
			$info = list_estado_tra($estado);

			echo json_encode(array('status' => 1,'info'=>$info,'me'=>$estado));
		}else{
			echo json_encode(array('status' => 0));
		}
	}

	if (isset($_POST)) {
		if (isset($_POST['historial'])) {
			obtener_historial();
		}elseif (isset($_POST['cambiar_dpto'])) {
			cambiar_dpto();
		}elseif (isset($_POST['obtene_mi_departamento'])) {
			obtene_mi_departamento();
		}elseif (isset($_POST['cambiar_estado'])) {
			cambiar_estado();
		}elseif (isset($_POST['obtene_mi_estado'])) {
			obtene_mi_estado();
		}
	}
?>