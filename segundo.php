<?php
include 'config.php';

@$segundo= $_GET['segundo'];


mysql_select_db("n_contador",$conexion);

mysql_query("UPDATE micontador SET segundo = $segundo");

$p = mysql_query("SELECT * FROM micontador");

while($fila = mysql_fetch_array($p)){

	if($fila['segundo'] < 10){
		echo  "0".$fila["segundo"];

	}else{
		echo  $fila["segundo"];
	}
	
}


mysql_close($conexion);



?>