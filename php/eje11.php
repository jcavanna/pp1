<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        class Persona{

            private $nombre;
            private $edad;


            public function getNombre() {
                return $this->nombre;
            }

            public function setNombre($nombre) {
                $this->nombre = $nombre;
            }

            public function getEdad() {
                return $this->edad;
            }

            public function setEdad($edad) {
                $this->edad = $edad;
            } 
        }
    
        class Empleado extends Persona{
            
            private $sueldo;
        

            public function getSueldo() {
                return $this->sueldo;
            }

            public function setSueldo($sueldo) {
                $this->sueldo = $sueldo;
            }

        }

        $persona1 = new Persona();
        $empleado1 = new Empleado(25000);

        $persona1->setNombre('Joaquin'.'<br>');
        $persona1->setEdad('25'.'<br>');

        echo $persona1->getNombre();
        echo $persona1->getEdad();

        $empleado = new Empleado();

        $empleado->setSueldo(25000);
        echo $empleado->getSueldo();
    ?>
</body>
</html>