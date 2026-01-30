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