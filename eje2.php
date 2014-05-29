<html>
<head>
<title>eje1</title>
</head>
<body>
<!--Confeccionar una clase Empleado, definir como atributos su nombre y sueldo.
Definir un método inicializar que lleguen como dato el nombre y sueldo. Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar impuestos (si el sueldo supera a 3000 paga impuestos)-->


<?php
#esto es php
class Empleado {
  private $nombre;
  private $sueldo;
  public function inicializar($nom,$suel)
  {
    $this->nombre=$nom;
    $this->sueldo=$suel;
  }
  public function imprimir()
  {
    echo $this->nombre;
    echo '<br>';

    if ($this->sueldo>3000){
      echo 'debe pagar los impuestos';
    }
    else {
      echo 'no debe de pagar los impuestos';
    }
  }
}

$Empleado1=new Empleado();
$Empleado1->inicializar('diana',5600);
$Empleado1->imprimir();

?>
</body>
</html>





