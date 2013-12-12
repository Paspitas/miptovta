<?php

	if(!empty($_SESSION['username']) and !empty($_SESSION['tipo_usu'])){
		$usu=$_SESSION['username'];
		$tip=$_SESSION['tipo_usu'];
	}
	
	$conexion = mysql_connect("localhost","elcodigo_ptovta","ptovta");
	mysql_select_db("elcodigo_wp161",$conexion);
	
	date_default_timezone_set("America/Santiago");
?>