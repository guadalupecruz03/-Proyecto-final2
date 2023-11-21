<?php
 class Usuario{
    public function InsertarUsuario($nombre, $apellido, $telefono, $CorreoElectronico, $clave, $tipo = 2){
        include "../conexionregistro.php";
        $conectar = new Conexion();
        $consulta = $conectar->prepare("INSERT INTO t_usuarios (nombre, apellido, telefono, CorreoElectronico, clave, rol) 
                                       VALUES (:nombre, :apellido, :telefono, :CorreoElectronico, :clave, :tipo)");
        $consulta->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $consulta->bindParam(":apellido", $apellido, PDO::PARAM_STR);
        $consulta->bindParam(":telefono", $telefono, PDO::PARAM_STR);
        $consulta->bindParam(":CorreoElectronico", $CorreoElectronico, PDO::PARAM_STR);
        $consulta->bindParam(":clave", $clave, PDO::PARAM_STR);
        $consulta->bindParam(":tipo", $tipo, PDO::PARAM_INT);
        $consulta->execute();
        return true;
    }

}
?>