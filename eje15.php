<html>
<head>
<title>eje15</title>
</head>
<body>
  <!-- Confeccionar una clase abstracta Persona que tenga como atributos el nombre y la edad.
   Definir como responsabilidades un método que cargue los datos personales y otro que los imprima.
  Plantear una segunda clase Empleado que herede de la clase Persona. Añadir un atributo sueldo y 
  los métodos de cargar el sueldo e imprimir su sueldo.
  Definir un objeto de la clase Persona y ver que error produce. 
  También crear un objeto de la clase Empleado y llamar a sus métodos.-->
<?php
abstract class Persona {
  protected $nombre;
  protected $edad;
  public function cargarDatosPersonales($nom,$eda)
  {
    $this->nombre=$nom;
    $this->edad=$eda;
  }
  public function imprimirDatosPersonales()
  {
    echo 'Nombre:'.$this->nombre.'<br>';
    echo 'Edad:'.$this->edad.'<br>';
  }
}

class Empleado extends Persona{
  protected $sueldo;
  public function cargarSueldo($sue)
  {
    $this->sueldo=$sue;
  }
  public function imprimirSueldo()
  {
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
}

$empleado1=New Empleado();
$empleado1->cargarDatosPersonales('vanessa bohorquez',18);
$empleado1->cargarSueldo(2400);
echo 'Datos personales y sueldo del empleado:<br>';
$empleado1->imprimirDatosPersonales();
$empleado1->imprimirSueldo();
?>
</body>
</html>