<?php
    /*include("../conexionPDO.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recopila los datos del formulario
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["CorreoElectronico"];
        $clave = $_POST["clave"];
        
        
        // Prepara la consulta de inserción
        $sql = "INSERT INTO t_usuarios (nombre, apellido, telefono, CorreoElectronico, clave) VALUES (?, ?, ?, ?, ?)";
        
        // Preparar la sentencia
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            // Vincula los parámetros
            $stmt->bind_param("sssss", $nombre, $apellido, $telefono, $correo, $clave);
            
            // Ejecuta la sentencia
            if ($stmt->execute()) {
                // La inserción fue exitosa, redirige al usuario a la página de inicio de sesión
                header("Location: ../login.php");
                exit;
            } else {
                // Si hubo un error en la inserción, redirige al usuario de nuevo a la página de registro
                header("Location: ../registro.php");
                exit;
            }
        } else {
            // Si hubo un error en la preparación de la consulta, redirige al usuario de nuevo a la página de registro
            header("Location: ../registro.php");
            exit;
        }
    }*/

    /*$nombre=$_POST['nombre'];
    $correo=$_POST['CorreoElectronico'];
    $password=$_POST['clave'];
    $tipo=$_POST['tipo'];
    if(isset($tipo)){
        $tipo=$tipo;
    }else{
        $tipo=2;
    }
    if(isset($nombre) && isset($correo) && isset($password)){
        include_once './Admin_usuario.php';
        $usuario=new Usuario();
        $resultado=$usuario->InsertarUsuario($nombre,
        $correo,MD5($password),$tipo);
        if($resultado==1){
            header("Location: ../login.php");
        }
        else{
            header("Location: ../registro.php");
        }
    }
    else{
        header("Location: ../registro.php");
    }*/

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['CorreoElectronico'];
    $password = $_POST['clave'];
    
    if (isset($nombre) && isset($apellido) && isset($telefono) && isset($correo) && isset($password)) {
        include_once './Admin_usuario.php';
        $usuario = new Usuario();
        $resultado = $usuario->InsertarUsuario($nombre, $apellido, $telefono, $correo, MD5($password));
        
        if ($resultado) {
            header("Location: ../login.php");
        } else {
            header("Location: ../registro.php");
        }
    } else {
        header("Location: ../registro.php");
    }
    ?>
    
