<?php
require 'config.php';
class Model {
    //Hacemos que el constructor sea privado para que no se pueda crear una instancia de la clase.
    //Solo se puede crear una instancia de la clase a traves del metodo obtenerInstancia().
    //El estatico hace que la variable sea de la clase y no del objeto. Es como una constante pero que puede cambiar.
    private static ?Model $instancia = null; //La instancia unica de la clase.
    private ?PDO $conexion = null; //La conexion a la base de datos.
  
    public function __construct() {
       try {
            $this->conexion = new PDO(DSN, USER, PASS);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public static function obtenerInstancia(): Model { //Devuelve una instancia de la clase Model.
        if (self::$instancia === null) { // Pregunta si la instancia es nula.
			//Si no existía la instancia, la creamos
            self::$instancia = new self(); // Crea la instancia.
        }
        return self::$instancia; // Devuelve la instancia.
    }

    public function obtenerConexion(): PDO { //Devuelve la conexion a la base de datos.
        return $this->conexion;
    }
}