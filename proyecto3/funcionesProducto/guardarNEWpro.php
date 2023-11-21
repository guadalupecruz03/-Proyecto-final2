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
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);
    $precio = mysqli_real_escape_string($conn, $_POST['precio']);
 
    // Procesar la imagen
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
        $imagen = $_FILES['imagen']['name'];
        $ruta_temporal = $_FILES['imagen']['tmp_name'];
    
        // Mover el archivo a una ubicación permanente
        $directorio_destino = "../img/";
        $ruta_destino = $directorio_destino . $imagen;
    
        move_uploaded_file($ruta_temporal, $ruta_destino);
    } else {
        echo var_dump($_FILES); //"Error: No se cargó ninguna imagen.";
        exit;
    }

    //$fecha = mysqli_real_escape_string($conn, $_POST['fecha_creacion']);
    $fecha = $_POST['fecha_creacion'];
    // Verificar si la fecha es válida antes de insertar
    if (strtotime($fecha) === false) {
        echo var_dump($_POST['fecha_creacion']); //"Error: La fecha proporcionada no es válida.";
    exit;}
$fecha = date("Y-m-d", strtotime($fecha));

    // Insertar el nuevo usuario en la base de datos
    $stmt = $conn->prepare("INSERT INTO productos (nombre, descripcion, precio, imagen, fecha_creacion) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdss", $nombre, $descripcion, $precio, $imagen, $fecha);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Redirigir a alguna página después de guardar el producto
        header("Location: ../producto.php?id=" . $stmt->insert_id);
        exit(); // Asegurar que el script se detenga después de la redirección
    } else {
        echo "Error al guardar el nuevo producto: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
} else {
    // Si alguien intenta acceder directamente a este archivo sin enviar el formulario, redirigir a alguna página adecuada
    header("Location: ../index.php");
    exit();
}
?>
