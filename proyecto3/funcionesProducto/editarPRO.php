<?php
if (isset($_GET['id'])) {
    // Obtener el ID del usuario desde la URL
    $productoId = $_GET['id'];

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

    // Consulta para obtener los datos del usuario
    $sql = "SELECT id, nombre, descripcion, precio FROM productos WHERE id = $productoId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row['nombre'];
        $descripcion = $row['descripcion'];
        $precio = $row['precio'];
    } else {
        echo "Usuario no encontrado";
        exit;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "ID de usuario no proporcionado";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <!-- Agrega tus estilos o enlaces a Bootstrap aquí -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bgcolor navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <img src="../img/logo.png" height="50px" width="130px" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">MENU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="catalago.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="perfilUsuario.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php">iniciar secion</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">acerca de
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="">nosotros</a></li>
              <li><a class="dropdown-item" href="#">contactos</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">buscar</button>
        </form>
      </div>
    </div>
  </nav><br>
    <!-- Formulario de edición con los datos cargados -->
    <form action="guardaredi.php" method="post">
        <input type="hidden" name="id" value="<?php echo $productoId; ?>">
        <div class="form-outline mb-3">
            <label class="form-label" for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
        </div>

        <div class="form-outline mb-3">
            <label class="form-label" for="descripcion">descripcion</label>
            <input type="text" name="descripcion" class="form-control" value="<?php echo $descripcion; ?>">
        </div>
        
        <div class="form-outline mb-3">
            <label class="form-label" for="precio">precio</label>
            <input type="decimal" name="precio" class="form-control" value="<?php echo $precio; ?>">
        </div>

        

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>

    <!-- Agrega tus scripts o enlaces a Bootstrap aquí -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>

