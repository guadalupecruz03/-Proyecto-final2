<?php
if (isset($_POST["ingresar"])) {
    if (empty($_POST["correo"]) || empty($_POST["password"])) {
       echo '<div class="alert alert-danger">Los campos están vacíos</div>';
    } else {
        $usuario = $_POST["correo"];
        $clave = $_POST["password"];
        //echo $clave;
        //Utilizar sentencias preparadas para evitar la inyección SQL
        include_once '../conexionPDO.php';
        $sql = $conn->prepare("SELECT * FROM t_usuarios WHERE CorreoElectronico = ? AND clave = ?");
        $sql->bind_param("ss",$usuario,MD5($clave));
        $sql->execute();
        $resultado = $sql->get_result();
        //echo "encontrado";
        if ($resultado->num_rows > 0) {
            //$user = $resultado->fetch_assoc();
            foreach ($resultado as $user) {
                if ($user['rol'] == 2) {
                    header("Location: ../cliente.php");
                } 
                elseif ($user['rol'] == 1) {
                    header("Location: ../admin.php");
                }
                exit();
            
                # code...
            }
            // Verifica el rol del usuario
           
        } else {
            echo "x";
            echo '<div class="alert alert-danger">Usuario no encontrado</div>';
        }
    }
}
else{

echo "error";
}
?>
