<html>
	<head>
		<title>ejer3</title>
	</head>
	<body>
		<?php
			for($i=1;$i<=20;$i++){
				$array[$i]=rand(0,50);
			};
			sort($array,0);
			for($z=1;$z<=20;$z++){
				echo $array[$z]."</br>";
			}
		?>
	</body>
</html>
