<?php  
	// Es una funcion que convierte un String en un arreglo, dependiendo de la construccion pedida
	
	$valor="Sergio Zapata Jurado";
	$fecha="05-04-2020";

	$datos=explode(" ", $valor);
	var_dump($datos);
	echo "<br>";
	echo "<hr>";
	echo "<pre>";
	print_r($datos);
	echo "</pre>";
	echo "<br>";
	echo "<hr>";
	
	$fec=explode("-", $fecha);
	echo "El año de la fecha es: ".$fec[2];
	echo "<br>";
	echo "El mes de la fecha es: ".$fec[1];
	echo "<br>";
	echo "El dia de la fecha es: ".$fec[0];
	echo "<hr>";
?>