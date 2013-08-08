<?php
include 'config.php';

@$minuto = $_GET['minuto'];


mysql_select_db("n_contador",$conexion);

mysql_query("UPDATE micontador SET minuto = $minuto");

$p = mysql_query("SELECT * FROM micontador");

while($fila = mysql_fetch_array($p)){

	if($fila['minuto'] < 10){
		echo  "0".$fila["minuto"];
		echo ":";

	}else{
		echo  $fila["minuto"];
		echo ":";
	}
}


mysql_close($conexion);



?>