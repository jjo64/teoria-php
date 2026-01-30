<?php
require 'Model.php';
//Ahora como hicimos en la clase model el patron singleton, osea una instancia static aca van a cambiar una cosita.
//Lo unico que cambia es que en vez de crear una instancia de la clase Model con new Model(), creamos una instancia de la clase Model con Model::obtenerInstancia().
// El :: es para llamar a un metodo estatico o tambien para llamar a una constante de una clase.
//Es como el self o un this pero para reconocer a la clase en si.
class Controller {
    private PDO $db;
    public function __construct() {
        $nuevoGestor = Model::obtenerInstancia(); //Obtenemos la instancia de la clase Model.
        $this->db = $nuevoGestor->obtenerConexion(); //Obtenemos la conexion a la base de datos.
    }

    //Aca irian las querys que queramos hacer a la base de datos.
    public function obtenerDatos() {
        $query = "SELECT * FROM tabla";
        $resultado = $this->db->query($query);
        return $resultado->fetchAll();
    }
}