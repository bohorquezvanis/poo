<html>
<head>
<title>eje12</title>
</head>
<body>
  <!--Confeccionar una clase Persona que tenga como atributos protegidos, el nombre y la edad. Definir como responsabilidades un método que cargue los datos personales y otro que los imprima.

Plantear una segunda clase Empleado que herede de la clase Persona. Añadir un atributo sueldo y los métodos de cargar el sueldo e imprimir su sueldo.

Definir un objeto de la clase Empleado y tratar de modificar el atributo edad-->

<?php
class Persona {
  protected $nombre;
  protected $edad;
  public function cargarDatosPersonales($nom,$ed)
  {
    $this->nombre=$nom;
    $this->edad=$ed;
  }
  public function imprimirDatosPersonales()
  {
    echo 'Nombre:'.$this->nombre.'<br>';
    echo 'Edad:'.$this->edad.'<br>';
  }
}

class Empleado extends Persona{
  protected $sueldo;
  public function cargarSueldo($su)
  {
    $this->sueldo=$su;
  }
  public function imprimirSueldo()
  {
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
}

$empleado1=New Empleado();
$empleado1->edad=18;
?>
</body>
</html>