<?php
require 'config.php'; // Requerimos el archivo config.php para poder usar las constantes.
class Model {
    private ?PDO $conexion = null; // Estamos creando un atributo de tipo PDO para guardar la conexion a la base de datos. 
    // Conexion que obtenemos del config.php.
    public function __construct() {
        $this->conexion = new PDO(DSN, USER, PASS); // Creamos la conexion a la base de datos.
    }

    public function obtenerConexion(): PDO { // Metodo que nos devuelve la conexion a la base de datos.
        return $this->conexion; // Devolvemos la conexion a la base de datos.
    }
}