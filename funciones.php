<html>

    <head>
	<script>
	</script>
	</head>
    <body>

		<?php
		
			// siendo $a un array, devolver el inverso
			function invertir1($a) {
				$i = count($a)-1;
				$v = $i;
				for ($j=0; $j <= $v; $j++) {
					$b[$j] = $a[$i];
					$i--;
				}
				return $b;
			}
			
			function invertir2($a) {
				$i = count($a)-1;
				while ($i >= 0) {
					$b[] = $a[$i];
					$i--;
				}
				return $b;
			}
			
			function invertir3($a) {
				$i = count($a)-1;				
				foreach ($a as $valor) {
					$b[$i] = $valor; 
					$i--;
				}
				return $b;
			}
			
			function invertir4($a){
				return array_reverse($a);
			}
			
			function invertir5($a){
				while ($b[] = array_pop($a)) {}
				array_pop($b);
				return $b;
			}

			var_dump(invertir1([1,2,3,4,5]));
			echo "<br>";
			var_dump(invertir2([1,2,3,4,5]));
			echo "<br>";
			//var_dump(invertir3([1,2,3,4,5]));
			echo "<br>";
			var_dump(invertir4([1,2,3,4,5]));
			echo "<br>";
			var_dump(invertir5([1,2,3,4,5]));
			echo "<br>";
			
			$consulta = ["nombre" => "Mª del Mar", "apellidos" => "garcia garcia"];
			$consulta = ["apellidos" => "garcia garcia","nombre" => "Mª del Mar"];
			echo $consulta["nombre"];
			
			
			function saludo($cadena){
				$i = count($cadena);
				for ($j = 0; $j < $i; $j++) {
					echo "Hola $cadena[$j] <br>";			
				}
			}
			
			saludo(["pedro","lucas","pedro","lucas","pedro","lucas"]); // no se espera en la funcion
			
			function circumference ($diameter){
				$c = $diameter * pi();	
				return(printf("%01.2f",$c));
			}
			
			
			for ($p = 1; $p < 10; $p++) {
				$c = circumference($p); $diameter = 3;
				echo "$c <br> ";
			}
			
			$d = saludo("pedro") + 6;
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
