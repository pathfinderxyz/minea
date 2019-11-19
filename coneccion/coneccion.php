<?php  
	$user = 'ylsxyolznqgjmq';
	$passwd = '0fefcd5a61bfa0b7f5d9b8abf6defeec725b68990f70119a768d0c70784962ca';
	$db = 'd9p3jvbpjas0nk';
	$port = 5432;
	$host = 'ec2-174-129-33-167.compute-1.amazonaws.com';
	$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
	$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());



	$list_dpto = array("GESTION DE AGUAS","GESTION TERRITORIAL","AUTORIZACIONES AMBIENTALES","FISCALIZACION Y CONTROL","ZONAS COSTERAS","CALIDAD AMBIENTAL","DIVERSIDAD BIOLOGICA","EDUCACION AMBIENTAL","DIRECCION","MISION ARBOL","TAQUILLA UNICA");

	$list_estados = array("Recibido","Revisando Papeles","En Tramite","Devuelto a","Tramitado");
?>