<?php 
	// If anidado es una estructura de control que te permite validar varios casos a la vez
	$variable1="b";

	if($variable1=="a"){
		echo "Esto es una a";
	}else if($variable1=="b"){
		echo "Esto es una b";
	}else{
		echo "No es una letra";
	}
	echo "<br>";
	echo "<hr>";

	$variable2="1";

	if($variable2=="a"){
		echo "Esto es una a";
	}else if($variable2=="b"){
		echo "Esto es una b";
	}else{
		echo "No es una letra";
	}
	echo "<br>";
	echo "<hr>";

	$edad=5;

	if($edad==5){
		echo "Es un niño";
	}else if($edad==15){
		echo "Es un adolescente";
	}else if($edad==20){
		echo "Es un adulto joven";
	}else{
		echo "No se sabe";
	}
	echo "<br>";
	echo "<hr>";
?>