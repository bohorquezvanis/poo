<html>
<head>
<title>eje16</title>
</head>
<body>
    <!-- Plantear una clase abstracta Trabajador. 
    Definir como atributo su nombre y sueldo. Declarar un método abstracto: 
    calcularSueldo. Definir otro método para imprimir el numbre y su sueldo.
    Plantear una subclase Empleado. Definir el atributo $horasTrabajadas, $valorHora.
    Para calcular el sueldo tener en cuenta que se le paga 3.50 la hora.
    Plantear una clase Gerente que herede de la clase Trabajador. 
    Para calcular el sueldo tener en cuenta que se le abona un 10% de las utilidades de la empresa.-->
<?php
abstract class Trabajador {
  protected $nombre;
  protected $sueldo;
  public function __construct($nom)
  {
    $this->nombre=$nom;
   
  }
  public function imprimir()
  {
    echo 'Nombre:'.$this->nombre.'<br>';
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
  public abstract function calcularSueldo();
}  

class Empleado extends Trabajador {
  protected $horasTrabajadas;
  protected $valorHora;
  public function __construct($nom,$horas,$valor)
  {
    parent::__construct($nom);
    $this->horasTrabajadas=$horas;
    $this->valorHora=$valor;
  }
  public function calcularSueldo()
  {
    $this->sueldo=$this->horasTrabajadas*$this->valorHora;
  }
}

class Gerente extends Trabajador {
  protected $utilidades;
  public function __construct($nom,$uti)
  {
    parent::__construct($nom);
    $this->utilidades=$uti;
  }
  public function calcularSueldo()
  {
    $this->sueldo=$this->utilidades*0.10;
  }
}

$empleado1=new Empleado('vanessa bohorquez',150,3.50);
$empleado1->calcularSueldo();
echo 'El sueldo del empleado<br>';
$empleado1->imprimir();

$gerente1=new Gerente('jorge marin',1000000);
$gerente1->calcularSueldo();
echo 'El sueldo del gerente<br>';
$gerente1->imprimir();
?>
</body>
</html>