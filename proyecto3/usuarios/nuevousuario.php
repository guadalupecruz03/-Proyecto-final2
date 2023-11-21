<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nuevo usuario</title>
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

    <section id="Portafolio">
        <form action="guardarNuevoUsuario.php" method="post">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-0 me-3">Crear nuevo usuario</p>
            </div><br>

            <!-- Nombre input -->
            <div class="form-outline mb-4">
                <input type="text" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Introduce tu nombre" name="nombre" required />
                <label class="form-label" for="form3Example3">Nombre completo</label>
            </div>

            <!-- Apellido input -->
            <div class="form-outline mb-4">
                <input type="text" id="form3ExampleApellido" class="form-control form-control-lg"
                    placeholder="Introduce tu apellido" name="apellido" required />
                <label class="form-label" for="form3ExampleApellido">Apellido</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form3ExampleEmail" class="form-control form-control-lg"
                    placeholder="Introduce tu correo" name="correo" required />
                <label class="form-label" for="form3ExampleEmail">Correo electrónico</label>
            </div>

            <!-- Teléfono input -->
            <div class="form-outline mb-4">
                <input type="tel" id="form3ExampleTelefono" class="form-control form-control-lg"
                    placeholder="Introduce tu teléfono" name="telefono" required />
                <label class="form-label" for="form3ExampleTelefono">Teléfono</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Introduce tu contraseña" name="password" required />
                <label class="form-label" for="form3Example4">Password</label>
            </div>

            <!-- Rol input (select) -->
            <div class="form-outline mb-4">
                <select name="rol" class="form-control form-control-lg">
                    <option value="1">Administrador</option>
                    <option value="2">Cliente</option>
                </select>
                <label class="form-label" for="rol">Rol</label>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <input type="submit" class="btn btn-outline-primary"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Guardar usuario">
            </div>
        </form>
    </section><br>

    <!-- Agrega tus scripts o enlaces a Bootstrap aquí -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>