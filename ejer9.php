<html>
	<head>
		<title>ejer9</title>
	</head>
	<body>
		<?php
			$cuadrado=[4,15,-3,9];
			
			for($i=0;$i<4;$i++){
				if($cuadrado[$i]>0){
					echo pow($cuadrado[$i],2);
				}
				else
				{
					throw new \Exception("La distancia no puede ser negativa", 1);
				}
			}
		?>
	</body>
</html>