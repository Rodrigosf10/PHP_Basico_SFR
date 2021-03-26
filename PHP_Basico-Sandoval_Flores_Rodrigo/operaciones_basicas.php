<?php 
	//Declaracion
	$valor1=10;
	$valor2=5;

	// Suma, Resta, Multiplicacion y Division
	$resultado=$valor1+$valor2; // Esta si es una suma
	$resultado2=$valor1-$valor2; // Esta si es una resta
	$resultado3=$valor1*$valor2; // Esta si es una multiplicacion
	$resultado4=$valor1/$valor2; // Esta si es una division
	
	echo $resultado;
	echo "<br>";
	echo $resultado2;
	echo "<br>";
	echo $resultado3;
	echo "<br>";
	echo $resultado4;
	echo "<br>";
	echo "<hr>";

	// La cotatenacion es con el punto.
	// La cocatenacion es la union de cadenas de texto y numeros

	$nombre="Pedro";
	$apellido='Lopez';
	echo $nombre." " .$apellido;
	echo "<br>";
	// Cocatenacion
	echo $nombre." ".$apellido." ".$resultado;
?>