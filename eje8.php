<html>
<head>
<title>eje7</title>
</head>
<body>
  <!-- Confeccionar la clase Tabla vista en conceptos anteriores.
   Plantear una clase Celda que colabore con la clase Tabla. La clase 
   Tabla debe definir una matriz de objetos de la clase Celda.
  La clase Celda debe definir los atributos: $texto, $colorFuente y $colorFondo.-->
<?php

class celda {
  private $texto;
  private $colorFuente;
  private $colorFondo;

  public function __construct($text,$colFuen,$colFon)
  {
    $this->texto=$text;
    $this->colorFuente=$colFuen;
    $this->colorFondo=$colFon;
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

  public function cargar($fila,$columna,$valor,$colFuen,$colFon)
  {
    $this->celdas[$fila][$columna]=new Celda($valor,$colFuen,$colFon);
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
$tabla1=new Tabla(10,3);
$tabla1->cargar(1,1,"titulo 1","#FF0000","#00FF00");
$tabla1->cargar(1,2,"titulo 2","#FF0000","#00FF00");
$tabla1->cargar(1,3,"titulo 3","#FF0000","#00FF00");
for($f=2;$f<=10;$f++)
{
  $tabla1->cargar($f,1,"x","#FF0000","#00FF00");
  $tabla1->cargar($f,2,"x","#FF0000","#00FF00");
  $tabla1->cargar($f,3,"x","#FF0000","#00FF00");
}
$tabla1->graficar();
?>
</body>
</html>