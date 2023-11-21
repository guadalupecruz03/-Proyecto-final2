<?php
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
}
?>