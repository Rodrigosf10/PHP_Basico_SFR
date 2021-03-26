<?php  
	// Las funciones son bloques de codigo que se pueden usar, si se llaman en el lugar que se pueda utilizar
	
	// Funcion Normal en PHP
	function mifuncion(){
		//mostar un nombre
		$r=array(1);
		return 'Este es un nombre';
	}
	echo mifuncion();
	echo "<br>";
	echo "<hr>";
	print_r(mifuncion());
	echo "<br>";
	echo "<hr>";
	// echo no puede imprimir un array sin un return


	function mifuncion2($valorA, $valorB, $opcion){
		switch ($opcion) {
			case 'suma':
				return $valorA+$valorB;
				break;
			case 'resta':
				return $valorA-$valorB;
				break;
			case 'multiplicacion':
				return $valorA*$valorB;
				break;
			case 'division':
				return $valorA/$valorB;
				break;
			default:
				return "No elejiste una opcion correcta";
				break;
		}
	}
	echo mifuncion2(10,5,'suma');
	echo "<br>";
	echo mifuncion2(10,5,'resta');
	echo "<br>";
	echo mifuncion2(10,5,'multiplicacion');
	echo "<br>";
	echo mifuncion2(10,5,'division');
	echo "<hr>";
?>