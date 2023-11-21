<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Productos</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Lista de Productos</h1>
  <div id="productos">
    <?php
    // Consulta para obtener los productos desde la base de datos
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar cada producto en la página
        while($row = $result->fetch_assoc()) {
            echo "<div class='producto'>";
            echo "<h2>" . $row["nombre"] . "</h2>";
            echo "<img src='" . $row["imagen"] . "' alt='" . $row["nombre"] . "'>";
            echo "<p><strong>Existencia:</strong> " . $row["existencia"] . "</p>";
            echo "<p><strong>Precio:</strong> $" . $row["precio"] . "</p>";
            echo "<p><strong>Descripción:</strong> " . $row["descripcion"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron productos.";
    }
    $conn->close();
    ?>
  </div>
</body>
</html>
