<?php
include 'conexionPDO.php';

$sql = "SELECT imagen, nombre, descripcion, precio, fecha_creacion FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Catálogo de Productos</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "<img src='../img/ '{$row['imagen']}' alt='{$row['nombre']}' style='max-width: 500px; max-height: 500px'><br>";
        echo "<p><strong>Nombre:</strong> " . $row["nombre"] . "</p>";
        echo "<p><strong>Descripción:</strong> " . $row["descripcion"] . "</p>";
        echo "<p><strong>Precio:</strong> $" . $row["precio"] . "</p>";
        echo "<p><strong>Fecha de Creación:</strong> " . $row["fecha_creacion"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No hay productos en el catálogo.";
}

$conn->close();

?>