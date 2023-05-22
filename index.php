<!DOCTYPE html>
<html>
<head>
  <title>Tarjetas con Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <h2>Tarjetas con Productos</h2>
  
  <?php
    // Definir el array de productos
    $productos = array(
      array("Aletas Fury Training Azul/Verde-04", 139.930, "https://speedoco.vteximg.com.br/arquivos/ids/164533/aletas-accesorios-azul-verde-8-121072562-1.jpg?v=637190997841270000-2000-2000undefined"),
      array("Aletas Fury Training Gris-04", 369.900, "https://speedoco.vteximg.com.br/arquivos/ids/192423/aletas-unisex-gris-8-121070006-1.jpg?v=637973050740200000-2000-2000undefined"),
      array("Aletas Training Naranja-05", 369.900,  "https://speedoco.vteximg.com.br/arquivos/ids/190132/Aletas-unisex-naranja-8-08841F960-1.jpg?v=637830431793730000-2000-2000undefined"),
      array("Center Snorkel Rojo-Única", 309.900, "https://speedoco.vteximg.com.br/arquivos/ids/196956/snorkel-unisex-rojo-8-0736115466-1.jpg?v=638140749579600000-2000-2000undefined"),
      array("Paleta Tech Paddle Rojo-S", 149.900,  "https://speedoco.vteximg.com.br/arquivos/ids/192447/paletas-unisex-rojo-8-73312D699-1.jpg?v=637974603208300000-2000-2000undefined")
    );
    
    // Mostrar la tabla de productos
    echo "<div class='row'>";    
    foreach ($productos as $producto) {
        echo "<div class='col-lg-3 col-md-12 mb-4 mb-md-2'>";
        echo "<div class='card text-center shadow'>";
        echo "<img src='$producto[2]' class='card-img-top' alt='Fissure in Sandstone' />";
        echo  "<div class='card-body'>";
        echo "<h5 class='card-title'>" .$producto[0] ."</h5>";
        echo "<p class='card-text'>" .$producto[1] ."</p>";
        echo  "<a href='/product' class='btn btn-primary'>Ver produto</a>";
        echo  "</div>";
        echo  "</div>";
        echo  "</div>";


#      echo "<tr>";
#      echo "<td>" . $producto[0] . "</td>";
#      echo "<td>$" . $producto[1] . "</td>";
#
#      echo "<td>" . $producto[2] . "</td>";
#      echo "</tr>";
    }
  ?>
  
</body>
</html>