<html>
<head>
<title>eje14</title>
</head>
<body>
  <!--Confeccionar una clase Persona que tenga como atributos el nombre y la edad. 
El constructor recibe los datos para inicializar dichos atributos. Otro método imprime los datos.
Plantear una segunda clase Empleado que herede de la clase Persona. Añadir un atributo sueldo. 
El constructor recibe los tres atributos de la clase Empleado. Llamar al constructor de la clase padre para 
inicializar los atributos nombre y edad del Empleado.
Definir un objeto de la clase Persona y llamar a sus métodos. También crear un objeto de la clase Empleado y llamar
 a sus métodos.-->

<?php
class Persona {
  protected $nombre;
  protected $edad;
  public function __construct($nom,$ed)
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
  public function __construct($nom,$ed,$su)
  {
    parent::__construct($nom,$ed);
    $this->sueldo=$su;
  }
  public function imprimirSueldo()
  {
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
}

$persona1=new Persona('diana',22);
echo 'Datos personales de la persona:<br>';
$persona1->imprimirDatosPersonales();
$empleado1=New Empleado('jorge',18,2400);
echo 'Datos personales y sueldo del empleado:<br>';
$empleado1->imprimirDatosPersonales();
$empleado1->imprimirSueldo();
?>
</body>
</html>