<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que el formulario se envió con el método POST

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

    // Lógica para procesar y guardar el nuevo usuario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    // Puedes agregar más campos según sea necesario

    // Hash de la contraseña (considera usar funciones más seguras, como password_hash)
    $hashedPassword = md5($password);

    // Insertar el nuevo usuario en la base de datos
    $sql = "INSERT INTO t_usuarios (nombre, apellido, CorreoElectronico, telefono, clave, rol) VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$hashedPassword', '$rol')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir a alguna página después de guardar el usuario
        header("Location: ../adminUsu.php");
        exit(); // Asegurar que el script se detenga después de la redirección
    } else {
        echo "Error al guardar el nuevo usuario: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    // Si alguien intenta acceder directamente a este archivo sin enviar el formulario, redirigir a alguna página adecuada
    header("Location: ../index.php");
    exit();
}
?>