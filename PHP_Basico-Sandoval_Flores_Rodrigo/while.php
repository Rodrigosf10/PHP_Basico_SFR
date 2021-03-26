<?php 
	// While es una estructura de repeticion que funciona simepre y cuando una condicion sea valida.

	$condicion=0;

	while ($condicion<10) {
		echo $condicion.". ";
		echo "Se cumple la condicion";
		echo "<br>";
		$condicion++; // Es lo mismo que "$condicion" pero sumando 1
	}

	// While infinito
	/*
	while(true){
		echo "infinito"
	}
	*/

?>