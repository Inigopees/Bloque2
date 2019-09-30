<html>
	<head>
		<title>ejer10</title>
	</head>
	<body>
		<?php
			/**
			 * 
			 */
			class Personas
			{
				public nombre;
				public apellido;
				public DNI;

				function __construct($nombre,$apellido,$DNI)
				{
					$this->DNI=$DNI;
					$this->nombre=$nombre;
					$this->apellido=$apellido;
				}

				public function getDNI(){
					return $this->DNI;
				}

				public function setDNI($DNI){
					$this->DNI=$DNI;
				}

				public function setnombre($nombre){
					$this->nombre=$nombre;
				}

				public function getnombre(){
					return $this->nombre;
				}

				public function setapellido($apellido){
					$this->apellido=$apellido;
				}

				public function getapellido(){
					return $this->apellido;
				}

				public function nombrecompleto(){
					echo "El nombre completo de la persona es : ".getnombre()." ".getapellido();
				}
			}

			class user extends Personas
			{
				public puntos;

				function __construct($puntos){
					$this->puntos=$puntos;
				}

				public function getPuntos() {
    				return $this->puntos;
  				}

  				public function setPuntos($puntos) {
    				$this->puntos = $puntos;
  				}

  				public function cantidadPuntos() {
    				if ($this->puntos < 100) {
      					echo "Tiene menos de 100 puntos";
    				}
				}
			}

			$persona = new Personas("Iñigo","Perez",723648326);
			$persona->setDNI(723648326);
			echo $persona->getDNI();

		?>
	</body>
</html>