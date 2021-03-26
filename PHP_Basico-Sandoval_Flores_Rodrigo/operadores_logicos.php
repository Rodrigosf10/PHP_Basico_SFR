<?php 
	// Los operadores logicos sirven para validar expresiones.
	// AND sirve para validar ambas sentencias
	// OR sirve para validar una u otra sentencia

	// AND
	$resultado=50;

	if ($resultado<51 AND $resultado>49){
		echo "Es un 50 valido";
	}
	echo "<br>";
	echo "<hr>";

	$edadvalida=25;

	if ($edadvalida>18 AND $edadvalida<26){
		echo "La edad es valida";
	}
	echo "<br>";
	echo "<hr>";

	// OR
	$sexo="F";

	if($sexo=='M' OR $sexo=='F'){
		echo "Sexo valido";
	}
	echo "<br>";
	echo "<hr>";


	// "Diferente de" sirve para validar que un datono corresponde a la cantidad o caracter
	$dato=5;

	if ($dato != 10){
		echo "es un buen dato";
	}else{
		echo "El dato vale 10 y no es valido segun los parametros";
	}
	echo "<br>";
	echo "<hr>";

	// Negacion sirve para hacer una validadcion de algo que no ocurre
	$dato2=true;

	if(!$dato2){
		echo "No es verdadero";
	}
	echo "<br>";
	echo "<hr>";
?>