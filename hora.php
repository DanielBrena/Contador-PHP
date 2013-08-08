<?php
include 'config.php';

@$hora = $_GET['hora'];


mysql_select_db("n_contador",$conexion);

mysql_query("UPDATE micontador SET hora = $hora");

$p = mysql_query("SELECT * FROM micontador");

while($fila = mysql_fetch_array($p)){

	echo  $fila["hora"];
	echo ":";
	
}


mysql_close($conexion);



?>