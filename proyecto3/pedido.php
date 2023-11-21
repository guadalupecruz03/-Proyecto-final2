<?php
include 'conexionPDO.php';

// Mostrar la lista de pedidos
$sql = "SELECT pedidos.id_pedido, clientes.nombre, pedidos.producto, pedidos.cantidad, pedidos.fecha_pedido
        FROM pedidos
        INNER JOIN clientes ON pedidos.id_cliente = clientes.id_cliente
        ORDER BY pedidos.fecha_pedido DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Lista de Pedidos</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID Pedido</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Fecha Pedido</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id_pedido'] . "</td>
                <td>" . $row['nombre'] . "</td>
                <td>" . $row['producto'] . "</td>
                <td>" . $row['cantidad'] . "</td>
                <td>" . $row['fecha_pedido'] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No hay pedidos.";
}

$conn->close();
?>
