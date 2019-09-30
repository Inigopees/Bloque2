<html>
	<head>
		<title>ejer1</title>
	</head>
	<body>
		<?php
			for($i=0;$i<10;$i++){
				$numeros[$i]=$i;
				$factorial[$i]=gmp_fact($i);
				echo "El factorial de ".$numeros[$i]." es ".$factorial[$i]."</br>";
			}
		?>
	</body>
</html>