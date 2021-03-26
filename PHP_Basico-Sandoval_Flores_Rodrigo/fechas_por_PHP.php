<?php  
	// Es importante revisar la zona horaria segun el pais debido al servidor
	
	// Zona horaria de Mexico
	date_default_timezone_set('America/Mexico_City');
	
	// Fechas
	$fecha=date('d-m-y');
	echo $fecha;
	echo "<br>";
	$fecha2=date('D-M-Y');
	echo $fecha2;
	echo "<br>";
	$fecha3=date('d-M-Y');
	echo $fecha3;
	echo "<hr>";

	// Tambien resulata con foreach
	$fecha4=array("25","Marzo","2021");
	foreach ($fecha4 as $key) {
		echo $key;
		echo "<br>";
	}
	echo "<hr>";
?>