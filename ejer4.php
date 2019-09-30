<html>
	<head>
		<title>ejer4</title>
	</head>
	<body>
		<?php
			$palabraString="pera manzana limon aguacate";
			$palabras=explode(" ",$palabraString);
			for($i=0;$i<count($palabras);$i++){
				$array[$palabras[$i]]=strlen($palabras[$i]);
			}
			for($z=0;$z<count($array);$z++){
				echo $array[$palabras[$z]]."</br>";
			}
		?>
	</body>
</html>
