<html>
	<head>
		<title>Ejer2</title>
	</head>
	<body>
		<?php
			$filas=15;
			$columnas=20;

			function crear_tabla($filas,$columnas){
				echo "<table>";
				for($i=0;$i<$filas;$i++){
					echo "<tr>";
					for($z=0;$z<$columnas;$z++){
						echo "<td>".$z."</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			}

			crear_tabla($filas,$columnas);
		?>
	</body>
</html>