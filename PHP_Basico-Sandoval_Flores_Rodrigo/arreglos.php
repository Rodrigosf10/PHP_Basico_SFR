<?php  
	// Los arreglos es un tipo de dato que puede contener "N" datos a partir de un almacenamiento por indice
	
	// No impoeta el tipo de dato
	
	// Declaracion
	$arreglo=array();
	$arreglo[0]="Mariana";
	$arreglo[1]=10;
	$arreglo[2]='Facultad';
	$arreglo[3]="Hola";

	//var_dump($arreglo);

	echo $arreglo[0];
	echo "<br>";
	echo $arreglo[1]+5;
	echo "<br>";
	echo $arreglo[2];
	echo "<br>";
	echo $arreglo[3];
	echo "<hr>";

	//Imprimir el arreglo
	echo count($arreglo);
	echo "<br>";


	for ($i=0; $i<count($arreglo); $i++){ 
		echo $arreglo[$i];
		echo "<br>";

		if ($arreglo[$i]=="Hola") {
			echo "Encontraste este dato";
			echo "<br>";
		}
	}	
	echo "<hr>";
	// Los arreglos se llenan desde el inicio o por posiciones

	$arreglo2=array("Roberto",1,2,3,4,5,"Hola");
	for ($i=0; $i<count($arreglo2); $i++){ 
		echo $arreglo2[$i];
		echo "<br>";

		if ($arreglo2[$i]=="Hola") {
			echo "Encontraste este dato";
			echo "<br>";
		}
	}
	echo "<hr>";
?>