<!DOCTYPE html>
<html>
<head>
  <title>Tabla de Productos</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <h2>Tabla de Productos</h2>
  
  <?php
    // Definir el array de productos
    $productos = array(
      array("Producto 1", 10.99, 5),
      array("Producto 2", 5.99, 8),
      array("Producto 3", 3.49, 12),
      array("Producto 4", 8.99, 3),
      array("Producto 5", 12.99, 10)
    );
    
    // Mostrar la tabla de productos
    echo "<table>";
    echo "<tr><th>Producto</th><th>Precio</th><th>Cantidad</th></tr>";
    
    foreach ($productos as $producto) {
      echo "<tr>";
      echo "<td>" . $producto[0] . "</td>";
      echo "<td>$" . $producto[1] . "</td>";
      echo "<td>" . $producto[2] . "</td>";
      echo "</tr>";
    }
    
    echo "</table>";
  ?>
  
</body>
</html>