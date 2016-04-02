<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Video 6 v2</title>
</head>
<body>
	<?php
		$nombre="Juan";
		function dameNombre(){
			global $nombre;
			$nombre="El nombre es ".$nombre;
		}

		dameNombre();
		echo $nombre; 
	?>
</body>
</html>