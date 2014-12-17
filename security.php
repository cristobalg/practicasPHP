<?php
	session_start();

	if (isset($_POST["access_requested"]) and 
	($_POST["access_requested"]=="yes")) {
		require("connection_info.php");
		
		// conexion a la BBDD con funcion		
		$link = mysql_connect($dbhost, $dbuser, $dbpass);
		
		if (!$link) {
			die('<br> No hemos podido conectar: ' . mysql_error());
		}
		
		// seleccion a la BBDD
		if (!mysql_select_db($dbdb, $link)) {
			echo 'Error seleccionando BBDD<br>';
		}
		$user = $_POST["uname"];
		$pword = $_POST["pword"];
		
		# Send query to MySQL server
		$resultado = mysql_query("SELECT customerEmail FROM customers
		WHERE customerEmail='$user' AND
		passwd = SHA('$pword')");
				
		if (!$resultado) {
			die('<br> Consulta no válida: ' . mysql_error());
		} else {		
			$row = mysql_fetch_assoc($resultado);
		}
		if ($row["customerEmail"]=="$user") {			
			$_SESSION["Approved"]="Yes";
			
		} else {
			echo "<p>Incorrect Username and/or Password, please try again</p>";
			$_SESSION["Approved"]="No"; 
		}
	}
	
	if (isset($_SESSION["Approved"]) AND 
		($_SESSION["Approved"]=="Yes")) {
			echo "<!-- HTML Comment, Access Approved, not visible in output -->";
			echo '<a href="close.php">Log out</a>';
		} else {
		$req_URL = $_SERVER["REQUEST_URI"];
print <<<GROUP1
<form action="$req_URL" method="POST">
<p>Username: <input type="text" name="uname"></p>
<p>Password: <input type="password" name="pword"></p>
<input type="hidden" name="access_requested" value="yes">
<p><input type="submit" value="Login"></p>
</form>
GROUP1;
		exit;
	}
	 
?>