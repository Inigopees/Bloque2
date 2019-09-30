<html>
	<head>
		<title>ejer5</title>
	</head>
	<body>
		<?php
			$meses=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
			for($i=0;$i<12;$i++){
				$calendario[$meses[$i]]=cal_days_in_month(CAL_GREGORIAN,$i+1,2020);
				echo "En 2020 ".$meses[$i]." tendra ".$calendario[$meses[$i]]." días.</br>";
			}


			
		?>
	</body>
</html>
