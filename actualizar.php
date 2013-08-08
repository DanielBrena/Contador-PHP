<?php

$conexion = mysql_connect("localhost","root","danielbrena2");
if(!$conexion){
	die("No se puede conectar".mysql_error());
}


@$hora = $_GET['hora'];
@$minuto = $_GET['minuto'];
@$segundo = $_GET['segundo'];

mysql_select_db("n_contador",$conexion);

mysql_query("UPDATE micontador SET hora = $hora ,minuto = $minuto, segundo = $segundo");

$p = mysql_query("SELECT * FROM micontador");

while($fila = mysql_fetch_array($p)){

	echo  $fila["hora"];
	echo ":";
	if($fila['minuto'] < 10 ){
		echo "0".$fila["minuto"];
	}else{
		echo $fila["minuto"];
	}
	
	echo ":";
	if($fila["segundo"] <10){
		echo "0".$fila["segundo"];
	}else{
		echo $fila["segundo"];
	}
	
}


mysql_close($conexion);
?>