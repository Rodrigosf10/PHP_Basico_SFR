<?php 
	// Sentencia if
	// Podemos utilizar los signos de menor "<" o mayor ">" para la comparacion de numeros
	// Tambien podemos utilizar mayor o igual que ">=" y menor o igual que "<="
	
	$numero1=5;
	$numero2=10;

	$bandera=true;
	$bandera2=0;

	if ($numero2 > $numero1) {
		echo "Es mayor - If sencillo";
	}
	echo "<br>";

	if($bandera){
		echo "Es verdadero - Boolean con true y false";
	}
	echo "<br>";

	if($bandera2){
		echo "Es verdadero - Boolean con 1 y 0";
	}
	echo "<br>";

	// 1 y true significa que es verdadero
	// 0 y false significa que es falso

	// La asignacion es verdadera
	/*
	if($numero1 = $numero2){
		echo "Es verdadero - Asignacion";
	}
	echo "<br>";
	*/

	// Se usa "==" para decir que si es exactamente igual 
	// Este da falso porque son diferentes los valores, si fueran iguales se cumple el if
	/*
	if($numero1 == $numero2){
		echo "Es verdadero - Iguladad";
	}
	echo "<br>";
	*/

	// Con mayor o igual que y menor o igual que
	/*
	if ($numero1 >= $numero2) {
		echo "Es verdadero - >= y <=";
	}
	*/
?>