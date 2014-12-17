<?php
	session_start();
	
	//unset($_SESSION);	
	session_unset(); 
	
	echo "<a href='bbdd2.php'> volver al inicio</a>";
	
	session_destroy();
?>