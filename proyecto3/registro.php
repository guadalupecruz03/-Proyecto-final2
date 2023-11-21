<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Section: Design Block -->

  <style>
    .background-radial-gradient {
      background-color: hsl(24, 100%, 51%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(27, 100%, 50%) 15%,
          hsl(32, 100%, 50%) 35%,
          hsl(24, 100%, 50%) 75%,
          hsl(22, 96%, 49%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(27, 100%, 49%) 15%,
          hsl(27, 88%, 50%) 35%,
          hsl(27, 98%, 51%) 75%,
          hsl(24, 100%, 50%) 80%,
          transparent 100%);
    }
  
    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#ff0101, #ff0101);
      overflow: hidden;
    }
  
    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#f80808, #f70b0b);
      overflow: hidden;
    }
  
    .bg-glass {
      background-color: hsla(286, 100%, 50%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>
</head>
<body>
<section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(0, 0%, 91%)">
            MANUALIDADES<br />
            <span style="color: hsl(0, 0%, 99%)">ALEGRES Y MACABRAS</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(0, 0%, 100%)">
            "Transformando tus espacios en mágicos momentos, en Navidad y Halloween."
          </p>
     <img src="https://t3.ftcdn.net/jpg/04/54/39/82/240_F_454398231_mpvitnePxAvRKN6UHDXebbNCTUI5OYWu.jpg" height="150px" width="250px"
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  
                    <img src="https://t4.ftcdn.net/jpg/06/21/50/45/240_F_621504518_7SbFPa0SP5wsUNwfRU48yxUDUfGv5foW.jpg" height="200px" width="250px"
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
  
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form action="./usuarios/crearusuario.php" method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="nombre" id="inputnombre" class="form-control" />
                      <label class="form-label" for="inputnombre">nombre</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="apellido" id="inputapellido" class="form-control" />
                      <label class="form-label" for="inputapellido">apellido</label>
                    </div>
                  </div>
                </div>
                <!-- telefono input -->
                <div class="form-outline mb-4">
                  <input type="number" name="telefono" id="numero" class="form-control" />
                  <label class="form-label" for="inputtelefono">telefono</label>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="CorreoElectronico" id="inputcorreo" class="form-control" />
                  <label class="form-label" for="inputcorreo">correo</label>
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="clave" id="inputpassword" class="form-control" />
                  <label class="form-label" for="inputpassword">contraseña</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" name="registro">
                registarse
                </button>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  <!-- Section: Design Block -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>  
</body>
</html>