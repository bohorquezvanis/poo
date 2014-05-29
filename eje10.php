<html>
<head>
<title>eje10</title>
</head>
<body>
  <!-- Confeccionar una clase Empleado, definir como atributos su nombre y sueldo.
El constructor recibe como parámetros el nombre y el sueldo, en caso de no pasar el valor del sueldo inicializarlo con el valor 1000.
Confeccionar otro método que imprima el nombre y el sueldo.
Crear luego dos objetos del la clase Empleado, a uno de ellos no enviarle el sueldo.-->
<?php
class Empleado {
  private $nombre;
  private $sueldo;
 
  public function __construct($nom,$suel=1000)
  {
    $this->nombre=$nom;
    $this->sueldo=$suel;
  }
  public function imprimir()
  {
    echo 'Nombre:'.$this->nombre.' - Sueldo:'.$this->sueldo.'<br>';
  }
}

$empleado1=new Empleado('jorge',2500);
$empleado1->imprimir();
$empleado2=new Empleado('diana');
$empleado2->imprimir();

?>
</body>
</html>