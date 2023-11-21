<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100" style="background-color: #ea00ff91;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://t4.ftcdn.net/jpg/06/26/68/65/240_F_626686580_ejPTVLiZPVyLqB4O8Qw2X51ZmvYXkk3K.jpg" height="300px" width="400px"
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    <img src="https://t3.ftcdn.net/jpg/06/48/99/82/240_F_648998245_gd0t3YcNLTT5LpzF57U36zugz6HRsUMv.jpg" height="300px" width="400px"
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="./usuarios/validarUsuarios.php" method="post">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff5100;"><span class="h1 fw-bold mb-0">iniciar seccion</span> </i>
                          <?php
                          include("./conexionPDO.php");
                          /*include("./usuarios/validarUsuarios.php");*/
                          ?>
                        </div>
                        
                        <div class="form-outline mb-4">
                          <input type="email" name="correo" id="form2Example17" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example17">correo</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example27">contraseña</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button type="submit" name="ingresar" class="btn btn-dark btn-lg btn-block" type="button">ingresar</button>
                        </div>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">No tienes una cuenta? <a href="registro.php"
                        style="color: #393f81;">Registrate aqui</a></p>
                        <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>