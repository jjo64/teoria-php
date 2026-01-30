<?php
require 'Model.php'; // Requerimos el archivo Model.php para poder usar la clase Model.
class Controller {
    private PDO $db; // Estamos creando un atributo de tipo PDO para guardar la conexion a la base de datos. 
    // Conexion que obtenemos del Model.
    public function __construct() {
        $nuevoGestor = new Model(); // Creamos un objeto de tipo Model para luego obtener la conexion a la base de datos.
        $this->db = $nuevoGestor->obtenerConexion(); // Obtenemos la conexion a la base de datos.
    }

    //Aca irian las querys que queramos hacer a la base de datos.
    public function obtenerDatos() {
        $query = "SELECT * FROM tabla";
        $resultado = $this->db->query($query);
        return $resultado->fetchAll();
    }
}