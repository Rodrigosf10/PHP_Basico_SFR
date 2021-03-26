<?php 

	// Un arreglo asociativo es un tipo de datos que almacena datos pero en vez de guardar por indice, se proporciona una llave o nombre a dicho dato
	
	$arregloColores=array("Auto"=>"Verde", "Moto"=>"Rojo", "Avion"=>"Gris");
	var_dump($arregloColores);
	echo "<br>";
	echo "<hr>";
	echo $arregloColores['Auto'];
	echo "<br>";
	echo "<hr>";
	echo $arregloColores['Moto'];
	echo "<br>";
	echo "<hr>";
	echo $arregloColores['Avion'];
	echo "<br>";
	echo "<hr>";
?>