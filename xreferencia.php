<html>

    <head>
	<script>
	</script>
	<?php
	
	// mira que bien. Devuelve la fecha de hoy.
	function hoy(&$d, &$m, &$a) {
		$d = 9;
		$m = 12;
		$a = 2014;
		return false;
		// devuelva la fecha de hoy con el formato:
		// dd, mm, aa donde son variable independientes ¿?
	}
	
	function test() {
		return 'ok';
	}
	
	echo test();
	
	if (hoy($dd,$mm, $aa)) {
		echo " Hoy es el dia $dd del mes $mm del $aa";
	} else { echo " no se pudo calcular la fecha";}
	/*
	$dd = // el dia de hoy en numero
	$mm = // el mes de hoy en numero
	$aa = // el año de hoy en numero
	*/
	
	$a = [1,5,3,7,8,4] // array desordenado
	
	$b = ordenaArray($a); // devuelve array ordenado
						// paso por valor
						
	$b == [1,3,4,5,7,8] // array ordenado
	
	ordenaArray2($a); //ordena el array que le pasamos
					// paso de valor por referencia
	$a == [1,5,3,7,8,4]
	
	[1,5,3,7,8,4] // inicial
	[1,5,3,7,4,8] // paso 1
	[1,5,3,4,7,8] // paso 2
	[1,3,4,5,7,8] // paso 3
	[1,3,4,5,7,8] // paso 4, no sube nada, esta ordenado
	
	[1,5,3,7,8,4] // inicial
	[1,3,5,7,4,8] // paso 1
	[1,3,5,4,7,8] // paso 2
	[1,3,4,5,7,8] // paso 3
	[1,3,4,5,7,8] // no cambios, termina
	
	
	?>
	</head>
		
    <body>
		

</body>
