# Composer

* Composer es un gestor de paquetes para PHP
* Permite gestionar las dependencias de un proyecto
* Permite instalar, actualizar y desinstalar paquetes de forma sencilla

    * En criollo tenemos una herramienta (Composer) que es como una llave maestra que nos permite instalar, actualizar y desinstalar librerias de PHP de forma sencilla.

    # Para entender composer hay dos archivos imporantes:

    * composer.json
        * Es el archivo de configuración de composer
        * Contiene la lista de dependencias del proyecto
        * Es el archivo que se comparte con los demás desarrolladores

    * composer.lock
        * Es el archivo de bloqueo de composer
        * Contiene la lista exacta de versiones de las dependencias
        * Es el archivo que se mantiene en el repositorio

# Comandos de composer

* composer init
    * Inicializa un proyecto composer
    * Crea el archivo composer.json

* composer require nombre-paquete
    * Instala un paquete
    * Añade el paquete a composer.json

# Estructura de un proyecto composer

* vendor
    * Contiene las dependencias del proyecto
* src
    * Contiene el código fuente del proyecto
* composer.json
    * Contiene la configuración del proyecto
* composer.lock
    * Contiene la lista exacta de versiones de las dependencias

# composer.json

    {
    "name": "teoria/composer", // nombre del proyecto
    "description": "Es un test para el repositorio de la teoria", // descripcion del proyecto
    "type": "project", // tipo de proyecto
    "autoload": {
        "psr-4": {
            "Teoria\\Composer\\": "src/" // directorio de las clases
        }
    },
    "authors": [
        {
            "name": "jjo64" // nombre del autor
        }
    ],
    "require": {} // dependencias del proyecto
}

# autoload

* Permite cargar las clases de forma automática, sin tener que usar require_once
* Tambien permite cargar las dependencias de forma automática
* Se define en el archivo composer.json

# 🛠 Ejemplo práctico: Instalando Monolog

Vamos a instalar una librería real. `monolog` es el estándar para manejar logs en PHP.

1.  **Instalar el paquete**:
    ```bash
    composer require monolog/monolog
    ```
    *Esto descargará la librería en la carpeta `vendor` y actualizará `composer.json` y `composer.lock`.*

2.  **Usarlo en tu código (index.php)**:
    ```php
    <?php
    require 'vendor/autoload.php'; // ¡Importante! Carga todas las librerías

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    // Crear un canal de log
    $log = new Logger('mi_app');
    $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));

    // Usarlo
    $log->warning('Esto es una advertencia de prueba');
    $log->error('Esto es un error grave');
    ?>
    ```

# 📌 Buenas prácticas y Versionado

### `composer.lock` vs `composer.json`
*   **`composer.json`**: Define qué librerías *quieres* (ej. "versión 2.0 o superior").
*   **`composer.lock`**: Define qué versión exacta *se instaló* (ej. "versión 2.1.3").
*   **Regla de oro**: SIEMPRE sube el `composer.lock` a git. Esto asegura que todos los desarrolladores usen exactamente las mismas versiones y evita el clásico "en mi máquina funciona".

### Comandos útiles
*   `composer install`: Instala las versiones exactas del `.lock`. Úsalo cuando te bajes un proyecto.
*   `composer update`: Ignora el `.lock` y busca las versiones más nuevas permitidas por el `.json`. **¡Cuidado!** Puede romper cosas si las librerías cambiaron. Usar solo cuando quieras actualizar a propósito.
