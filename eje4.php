<html>
<head>
<title>eje3</title>
</head>
<body>
  <!--Confeccionar una clase CabeceraPagina que permita mostrar un título, indicarle si queremos que aparezca centrado, a derecha o izquierda, además permitir definir el color de fondo y de la fuente.-->


<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  private $colorFuente;
  private $colorFondo;
  public function inicializar($tit,$ubi,$colFuen,$colFon)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
    $this->colorFuente=$colFuen;
    $this->colorFondo=$colFon;
  }
  public function graficar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.';color:';
    echo $this->colorFuente.';background-color:'.$this->colorFondo.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina();
$cabecera->inicializar('El blog del programador','center','#0000FF','black');
$cabecera->graficar();
?>
</body>
</html>