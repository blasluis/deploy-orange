<?php

// Conexion a la base de datos
require_once('bdd.php');
session_start();
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color']) && isset($_SESSION['sess_user']) ){
	
	$title = $_POST['title'];
	$user = $_SESSION['sess_user'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];

	$sql = "INSERT INTO events(user, title, start, end, color) values ('$user', '$title', '$start', '$end', '$color')";
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error de preparación');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Error de ejecución');
	}

}
header("Location: {$_SERVER['HTTP_REFERER']}");
?>
