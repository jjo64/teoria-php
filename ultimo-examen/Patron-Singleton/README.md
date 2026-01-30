# Patron Singleton

* El patron singleton es un patron de diseño que se encarga de crear una instancia unica de una clase.
* 

* En que se diferencia si no aplicaramos el patron singleton:

    1. El otro diseño que vimos en MVC, creaba una instancia de la clase Model con new Model().
    2. En este caso, creamos una instancia de la clase Model con Model::obtenerInstancia().


### ¿Por qué usar Singleton? (Ventajas)

1.  **Control de acceso a recursos compartidos**: Ideal para conexiones a base de datos, logs, o configuraciones globales donde quieres evitar la sobrecarga de crear múltiples instancias.
2.  **Ahorro de memoria**: Como solo existe un objeto, no desperdicias RAM creando conexiones duplicadas innecesariamente.
3.  **Punto de acceso global**: Permite acceder a la instancia desde cualquier parte de la aplicación sin tener que pasar el objeto por todas las funciones.

### Ejemplo Práctico: Conexión a Base de Datos (El caso clásico)

Este es el uso más común. Queremos una sola conexión abierta para toda la petición del usuario.

```php
class Database {
    // 1. Propiedad estática privada para guardar la instancia
    private static $instance = null;
    private $pdo;

    // 2. Constructor privado para evitar 'new Database()' desde fuera
    private function __construct() {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        } catch (PDOException $e) {
            die("Error conexión: " . $e->getMessage());
        }
    }

    // 3. Método estático público para obtener la instancia
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }
}

// Uso:
$db = Database::getInstance(); // Crea la conexión
$con = $db->getConnection();

$db2 = Database::getInstance(); // Devuelve la MISMA conexión anterior
```

* Entonces cuales son los cambios necesarios para apliar este diseño?

    # En nuestro Model:

    1. En nuestro modelo agregaremos una variable de acceso privado (atributo de la clase) de tipo Model (asi se llama nuestra clase, pero si se llamara Vehiculo, seria de tipo Vehiculo) y sera estatica. Y sera = null. Por eso el signo de interrogacion. 
    2. En nuestro modelo, en vez de tener un constructor, tendremos un constructor privado. Ya que no nos interesa crear una instancia de la clase con new Model(), evitamos que en cualquier archivo de nuestro codigo creen una instancia de la clase.
    3. En nuestro modelo, aparte de tener un metodo obtenerConexion, tendremos un metodo obtenerInstancia que devuelva la instancia unica de la clase. Solo si no existe osea si es !== null, si existe devuelve la instancia unica de la clase.
    
   # En nuestro Controller:

    1. En nuestro controller, en vez de crear una instancia de la clase Model con new Model(), creamos una instancia de la clase Model con Model::obtenerInstancia().