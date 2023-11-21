<?php
// Conéctate a la base de datos (reemplaza con tus credenciales)
$db = new mysqli("localhost", "root", "root", "manualidades");

if ($db->connect_error) {
    die("Error de conexión: " . $db->connect_error);
}

// Obtén los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Realiza una consulta para verificar el usuario y la contraseña
$query = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = $db->query($query);

if ($result->num_rows == 1) {
    // Usuario autenticado correctamente
    $user = $result->fetch_assoc();
    
    // Verifica el rol del usuario
    if ($user['role'] == 'cliente') {
        echo "Bienvenido, eres un usuario cliente.";
        header("Location: ../cliente.php");
    } elseif ($user['role'] == 'administrador') {
        echo "Bienvenido, eres un usuario administrador.";
        header("Location: ../admin.php");
    }
} else {
    echo "Usuario o contraseña incorrectos";
}

// Cierra la conexión a la base de datos
$db->close();
?>