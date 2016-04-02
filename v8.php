<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>video8</title>
	<style type="text/css">
		.resaltar{
			color:#f00;
			font-weight: bold;
		}

	</style>
</head>
<body>
	<?php 
		$variable1="Casa";
		$variable2="CASA";

		$resultado=strcmp($variable1,$variable2);//devuelve 1 si no son iguales y 0 si son iguales

		if($resultado){
			echo "No coinciden";
		}else {echo "coinciden";}
	?>
</body>
</html>