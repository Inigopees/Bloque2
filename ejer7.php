<html>
	<head>
		<title>ejer7</title>
	</head>
	<body>
		<?php
			$numero=6;
			$expo=3;
			function calcularexp($numero,$expo=2){
				$vuelta=pow($numero,$expo);
				return $vuelta;
			}
			echo calcularexp($numero);
		?>
	</body>
</html>