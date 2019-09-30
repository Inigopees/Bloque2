<html>
	<head>
		<title>ejer7</title>
	</head>
	<body>
		<?php
			$nombreDocumento="/var/www/html/Bloque2/Bloque2/ejer10.php";
			if(file_exists($nombreDocumento)){
				echo "el fichero existe";
			}
			else
			{
				echo "no existe el archivo";
				throw new Exception('No existe el archivo');
			}
		?>
	</body>
</html>