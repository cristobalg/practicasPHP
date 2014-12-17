<html>
	<head>
		<title>HELLO FROM PHP</title>
	</head>
	<body>
		<h1>Hello from PHP</h1>
		<?php
		// http://localhost/tarde/ejemplos/hola.php?first_name=Cristobal&last_name=gonzalez
		// ?first_name=Cristobal&last_name=Gonzalez
		$f_name = $_GET["first_name"];
		$l_name = $_GET["last_name"];
		echo "Hello $f_name $l_name";
		?>
	</body>
</html>