<html>
	<head>
		<title>ejer6</title>
	</head>
	<body>
		<?php
			$mes=diciembre;
			$nombre=Iñigo;

			$calendario=(
				$enero=array(),
				$febrero=array(),
				$marzo=array(),
				$abril=array(),
				$junio=array(),
				$julio=array(),
				$agosto=array(),
				$septiembre=array(),
				$octubre=array(),
				$noviembre=array(),
				$diciembre=array()
			);

			function insertarCumpleaños($nombre,$mes){
				switch ($mes) {
					case 'enero':
						$enero[]=$nombre;
						$vuelta=count($enero);
					break;
					case 'febrero':
						$febrero[]=$nombre;
						$vuelta=count($febrero);
					break;
					case 'marzo':
						$marzo[]=$nombre;
						$vuelta=count($marzo);
					break;
					case 'abril':
						$abril[]=$nombre;
						$vuelta=count($abril);
					break;
					case 'junio':
						$junio[]=$nombre;
						$vuelta=count($junio);
					break;
					case 'julio':
						$julio[]=$nombre;
						$vuelta=count($julio);
					break;
					case 'agosto':
						$agosto[]=$nombre;
						$vuelta=count($agosto);
					break;
					case 'septiembre':
						$septiembre[]=$nombre;
						$vuelta=count($septiembre);
					break;
					case 'octubre':
						$octubre[]=$nombre;
						$vuelta=count($octubre);
					break;
					case 'noviembre':
						$noviembre[]=$nombre;
						$vuelta=count($noviembre);
					break;
					case 'diciembre':
						$diciembre[]=$nombre;
						$vuelta=count($diciembre);
					break;
				}
				return $vuelta;
			}

			echo "Se ha agregado ".$nombre." con exito al mes ".$mes.". Este mes hay ".insertarCumpleaños($nombre,$mes)." personas que cumplan años."
		?>
	</body>
</html>