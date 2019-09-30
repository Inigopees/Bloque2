<html>
	<head>
		<title>ejer3</title>
	</head>
	<body>
		<?php
			for($i=1;$i<=20;$i++){
				$array[$i]=rand(0,50);
				$suma+=$array[$i];
			}
			$media=$suma/20;
			sort($array,0);
			for($z=0;$z<=20;$z++){
				if($z==0){
					echo "<h1 style='color:blue;'>".$array[$z]."</h1></br>";
				}
				elseif($z==19)
				{
					echo "<h1 style='color:green;'>".$array[$z]."</h1></br>";
				}
				else{
					echo $array[$z]."</br>";
				}
			}
			echo "la suma de todos los numeros es= ".$suma."</br>";
			echo "la media de los numeros listados es= ".$media;
		?>
	</body>
</html>
