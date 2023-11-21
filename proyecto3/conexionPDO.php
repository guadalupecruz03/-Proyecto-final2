<?php
$servername = "localhost";
$username = "root";
$password = "root"; // Sin contraseña
$database = "manualidades";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

/*class Conexion extends PDO{  //Conexion segura
    private $hostBd='localhost';
    private $nombreBd='root';
    private $usuarioBd='root';
    private $passwordBd='root';
    public function __construct()
    {
        try{  //validar 
            parent::__construct('mysql:host='.$this->hostBd.';dbname='.$this->
            nombreBd.';charset=utf8',$this->usuarioBd,$this->passwordBd, array(PDO::
            ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch(Exception $e) {
            echo 'Error: '. $e->getMessage();
            exit;
        }
    }
}

?>
class Conexion extends PDO {
    private $hostBd = 'localhost';
    private $nombreBd = 'manualidades'; // Cambia al nombre correcto de tu base de datos
    private $usuarioBd = 'root';
    private $passwordBd = 'root';

    public function __construct() {
        try {
            parent::__construct('mysql:host=' . $this->hostBd . ';dbname=' . $this->nombreBd . ';charset=utf8', $this->usuarioBd, $this->passwordBd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
            exit;
        }
    }
}*/
?>
