<?php
require_once 'Rectangulo.php';
$r = new Rectangulo($_GET['base'],$_GET['altura']);
$perimetro = $r->calcularPerimetro();
$area = $r->calcularArea();
$cuadrado = $r->esCuadrado() ? "sí" : "no";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Datos del rectángulo</title>
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
      <div class="container">
      <header class="col-12 jumbotron">
        <h1>Datos del rectángulo</h1>
      </header>
      <main role="main" class="col-12 row">
        <article>
            <p>El perímetro es <?php echo $perimetro; ?></p>
            <p>El área es <?php echo $area; ?></p>
            <p>El rectángulo <?php echo $cuadrado;?> es un cuadrado.</p>
            
        </article>
      </main>
    </div>
    </body>
</html>
