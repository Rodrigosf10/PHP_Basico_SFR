<?php 
	// Switch es una estructura de control de casos
	// Switch con valores numericos
	$valorprincipal=1;
	switch ($valorprincipal){
		case 1:
			echo "Este es el caso 1";
			break;
		case 2:
			echo "Este es el caso 2";
			break;
		default:
			echo "No existe ese caso";
			break;
	}
	echo "<br>";
	echo "<hr>";

	// Switch con valores de tipo cadena
	$valorprincipal2="B";
	switch ($valorprincipal){
		case "A":
			echo "Este es el caso A";
			break;
		case "B":
			echo "Este es el caso B";
			break;
		default:
			echo "No existe ese caso";
			break;
	}
	echo "<br>";
	echo "<hr>";
?>