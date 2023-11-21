<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "manualidades";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener usuarios desde la base de datos
$sql = "SELECT id, nombre, CorreoElectronico, rol FROM t_usuarios";
$result = $conn->query($sql);

// Cerrar la conexión
$conn->close();
?>
<?php
     session_start();
     if(isset($_SESSION['correoUsuario'])){
        $usuarioSesion= $_SESSION['correoUsuario'];
        $tipoUsuario= $_SESSION['tipoUsuario'];
     }
     else{
        $usuarioSesion= '';
        $tipoUsuario= '';
     }   
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bgcolor navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <img src="img/logo.png" height="50px" width="130px" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">MENU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="producto.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="adminUsu.php">Usuarios</a>
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
  <!-- boton nuevo-->
  <a class="btn btn-outline-info" href="./usuarios/nuevousuario.php" role="button">Nuevo</a>
  <!-- tabla -->
  <section id="Portafolio">
    <table class="table table-light">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>" . $row["CorreoElectronico"] . "</td>";
                    echo "<td>" . $row["rol"] . "</td>";
                    echo '<td>
                            <a href="./usuarios/eliminarUsu.php?id=' . $row["id"] . '">Eliminar</a>
                            <a href="./usuarios/editarUsu.php?id=' . $row["id"] . '">Editar</a>
                          </td>';
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay usuarios</td></tr>";
            }
            ?>
    </table>
   </section>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>