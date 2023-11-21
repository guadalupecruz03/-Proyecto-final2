<?php
if (isset($_GET['id'])) {
    // Obtener el ID del usuario desde la URL
    $usuarioId = $_GET['id'];

    // Conexión a la base de datos (debes completar con tus datos de conexión)
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "manualidades";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta para eliminar el usuario
    $sql = "DELETE FROM t_usuarios WHERE id = $usuarioId";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../adminUsu.php");
    } else {
        echo "Error al eliminar usuario: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "ID de usuario no proporcionado";
}
?>
