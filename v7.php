<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Video 7</title>
</head>
<body>
	<?php
		function incrementaVariable(){
			static $contador=0;
			//Al declarar la constante donde se almacenan los valores hace que no empiece de nuevo
			$contador++;
			echo $contador."<br>";
		}

		incrementaVariable();
		incrementaVariable();
		incrementaVariable();
		incrementaVariable();

	?>
</body>
</html>