<?php 
	session_start();
	$_SESSION['user'] = null;
	$_SESSION['autorizado'] = false;
	$_SESSION['rol'] = null;
	unset($_SESSION['rol']);
	unset($_SESSION['user']);
	unset($_SESSION['autorizado']);
	header('Location: index.php');
?>