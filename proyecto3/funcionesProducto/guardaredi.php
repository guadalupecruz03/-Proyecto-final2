<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que el formulario se envió con el método POST

    // Lógica para procesar y guardar cambios
    if (isset($_POST['id'])) {
        // Obtener el ID del usuario desde el formulario
        $productoId = $_POST['id'];

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

        // Lógica para procesar y guardar cambios (debes completar según tus necesidades)
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        // Puedes agregar más campos según sea necesario

        // Actualizar los datos del usuario en la base de datos
        $sql = "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio = '$precio' WHERE id = $productoId";
        if ($conn->query($sql) === TRUE) {
            // Redirigir a la página de administración después de guardar cambios
            header("Location: ../producto.php");
            exit(); // Asegurar que el script se detenga después de la redirección
        } else {
            echo "Error al actualizar producto: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    } else {
        echo "ID del producto no proporcionado";
    }
} else {
    // Si alguien intenta acceder directamente a este archivo sin enviar el formulario, redirigir a alguna página adecuada
    header("Location: ../index.php");
    exit();
}
?>

