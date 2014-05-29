<html>
<head>
<title>eje9</title>
</head>
<body>
  <!--Confeccionar la clase Tabla vista en conceptos anteriores. Plantear una clase Celda que colabore con la clase Tabla.
  La clase Tabla debe definir una matriz de objetos de la clase Celda.
  En la clase Tabla definir un método insertar que llegue un objeto 
  de la clase Celda y además dos enteros que indiquen que posición debe tomar dicha celda en la tabla.
  La clase Celda debe definir los atributos: $texto, $colorFuente y $colorFondo.-->
<?php
class Celda {
  private $texto;
  private $colorFuente;
  private $colorFondo;
  function __construct($tex,$cfue,$cfon)
  {
    $this->texto=$tex;
    $this->colorFuente=$cfue;
    $this->colorFondo=$cfon;
  }
  public function graficar()
  {
   echo '<td style="color:'.$this->colorFuente.';background-color:'.$this->colorFondo.'">'.$this->texto.'</td>';
  }
}

class Tabla {
  private $celdas=array();
  private $cantFilas;
  private $cantColumnas;

  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }

  public function insertar($cel,$fila,$columna)
  {
    $this->celdas[$fila][$columna]=$cel;
  }

  private function inicioTabla()
  {
    echo '<table border="1">';
  }

  private function inicioFila()
  {
    echo '<tr>';
  }

  private function mostrar($fi,$co)
  {
     $this->celdas[$fi][$co]->graficar(); 
  }

  private function finFila()
  {
    echo '</tr>';
  }

  private function finTabla()
  {
    echo '</table>';
  }

  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
         $this->mostrar($f,$c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}

$tabla1=new Tabla(10,2);
$celda=new Celda('titulo 1','#FF3300','#FFCCFF');
$tabla1->insertar($celda,1,1);
$celda=new Celda('titulo 2','#FF3300','#FFCCFF');
$tabla1->insertar($celda,1,2);
for($f=2;$f<=10;$f++)
{
  $celda=new Celda('x','#6600FF  ','#FFFF33');
  $tabla1->insertar($celda,$f,1);
  $celda=new Celda('y','#6600FF  ','#FFFF33');
  $tabla1->insertar($celda,$f,2);
}
$tabla1->graficar();
?>
</body>
</html>