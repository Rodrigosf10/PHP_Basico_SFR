<?php  
	// Es una estructura de control repetitiva que usa llaves o asociaciones de datos
	
	$arregloColores=array("Auto"=>"Verde", "Moto"=>"Rojo", "Avion"=>"Gris");
	foreach ($arregloColores as $key => $value) {
		echo $key;
		echo "<br>";
	}
	echo "<hr>";

	$arreloNumeros=array(1,2,3,4,5);
	foreach ($arreloNumeros as $key) {
		echo $key;
		echo "<br>";
	}
	echo "<hr>";
?>