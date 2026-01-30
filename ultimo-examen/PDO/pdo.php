<?php
class CajeroController {
    private PDO $db;
    public function __construct() {
        $nuevoGestor = Model::obtenerInstancia();
        $this->db = $nuevoGestor->obtenerConexion();
    }

    // Solo nos vamos a centrar en nuestras funciones del Controller
   
    //Probamos el query con fetch()
    public function query_fetch() {
        $query = "SELECT * FROM tabla";
        $resultado = $this->db->query($query);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    //Probamos el query con fetchAll()
    public function query_fetchAll() {
        $query = "SELECT * FROM tabla";
        $resultado = $this->db->query($query);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    //Probamos el prepare() sin pasarle parametros (Funciona tambien)
    public function prepare() {
        $query = "SELECT * FROM tabla WHERE id = 1";
        $resultado = $this->db->prepare($query);
        $resultado->execute(); // Pero siempre hay que hacer el execute() aunque no le pasemos parametros
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    //Probamos el prepare() con execute() con parametros
    public function prepare_execute() {
        $query = "SELECT * FROM tabla WHERE id = :id";
        $resultado = $this->db->prepare($query);
        $resultado->execute(['id' => 1]);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }
}