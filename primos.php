<html>

    <head>
	<script>
	</script>
	</head>
    <body>

		<?php
		
			// saludando
			function saludo($cadena){
				$i = count($cadena);
				for ($j = 0; $j < $i; $j++) {
					echo "Hola $cadena[$j] <br>";			
				}
			}
			
			saludo(["pedro","lucas","pedro","lucas","pedro","lucas"]); // no se espera en la funcion
			
			function circumference ($diameter) {
				$c = $diameter * pi();	
				return(printf("%01.2f",$c));
			}
		
			circumference(3);
			echo "<br>";
			circumference(4);
			echo "<br>";
			circumference(5);
			
			
			
			function esPrimo($dividendo) {
				$divisor = 2;
				while ($divisor < $dividendo) 
				{	
					if (($dividendo % $divisor) == 0) 
					{
						return false;
					}
					$divisor++;
				}
				return true;
			}
				
			function listaPrimos($max){
				$numero = 1;			
				$resultado = [];
				while ($numero <= $max) {
					if (esPrimo($numero)) {
						$resultado[] = $numero;
					}
					$numero++;
				}
				return $resultado;
			}
			function imprimeArray($a) {
				$i = count($a);
				for ($j = 0; $j < $i; $j++) {
					echo "posicion $j: $a[$j] <br>";			
				}
			}
			
			function multiplicaArray($a) {
				$i = count($a);
				$total = 1;
				for ($j = 0; $j < $i; $j++) {
					$total = $total * $a[$j];
				}
				return $total;
			}
			
			function multiplicaArray2($a) {
				$i = count($a);
				$total = 1;
				$j = 0;
				while ($j < $i) {
					$total = $total * $a[$j];
					$j++;
				}
				return $total;
			}
			
			var_dump(multiplicaArray([1,3,1,1,4]));
			var_dump(multiplicaArray2([1,1,1,3,4]));
			
			
?>
	     
 	
    </body>

</html>
