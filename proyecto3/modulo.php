<?php
// Conexión a la base de datos (reemplaza con tus propios detalles)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "manualidades";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener el historial de compras del cliente (reemplaza 'ID_DEL_CLIENTE' con el ID real del cliente)
$cliente_id = 'ID_DEL_CLIENTE';
$sql = "SELECT * FROM historial_compras WHERE cliente_id = $cliente_id ORDER BY fecha_compra DESC";
$result = $conn->query($sql);

// Mostrar el historial de compras
if ($result->num_rows > 0) {
    echo "<h2>Historial de Compras</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Fecha de Compra</th><th>Producto</th><th>Cantidad</th><th>Precio</th><th>Estado</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['fecha_compra'] . "</td>";
        echo "<td>" . $row['producto'] . "</td>";
        echo "<td>" . $row['cantidad'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo "<td>" . $row['estado'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay compras registradas.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>