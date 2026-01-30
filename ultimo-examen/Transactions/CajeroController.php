<?php
//Haremos como ya que hicimos un require de nuestro Model.
// require 'Model.php';

class CajeroController {
    private PDO $db;
    public function __construct() {
        $nuevoGestor = Model::obtenerInstancia();
        $this->db = $nuevoGestor->obtenerConexion();
    }

    // Solo nos vamos a centrar en nuestras funciones del Controller
   
    public function teoria_transaccion(){
     
        //Para empezar una transaccion
        $this->db->beginTransaction();

        //Para hacer una query
        $query = "SELECT * FROM tabla";
        $resultado = $this->db->query($query);
        return $resultado->fetchAll();

        //Para hacer un commit
        $this->db->commit();

        //Para hacer un rollback
        $this->db->rollBack();
    }
}