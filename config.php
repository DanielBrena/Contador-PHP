<?php

$conexion = mysql_connect("localhost","root","danielbrena2");
if(!$conexion){
	die("No se puede conectar".mysql_error());
}
