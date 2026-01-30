# Patron Singleton

* El patron singleton es un patron de diseño que se encarga de crear una instancia unica de una clase.
* 

* En que se diferencia si no aplicaramos el patron singleton:

    1. El otro diseño que vimos en MVC, creaba una instancia de la clase Model con new Model().
    2. En este caso, creamos una instancia de la clase Model con Model::obtenerInstancia().

* Ventajas del patron singleton:

    1. No tenemos mil objetos en la memoria, solo uno.
    2. Pensemos que cada objeto ya no es en la memoria en si, sino que es una conexion. Cada uno hace una peticion en PDO
    para loguearse en phpMyAdmin (ponele), con unas credenciales en concreto (Constantes: DSN, USER, PASS).

* Entonces cuales son los cambios necesarios para apliar este diseño?

    # En nuestro Model:

    1. En nuestro modelo agregaremos una variable de acceso privado (atributo de la clase) de tipo Model (asi se llama nuestra clase, pero si se llamara Vehiculo, seria de tipo Vehiculo) y sera estatica. Y sera = null. Por eso el signo de interrogacion. 
    2. En nuestro modelo, en vez de tener un constructor, tendremos un constructor privado. Ya que no nos interesa crear una instancia de la clase con new Model(), evitamos que en cualquier archivo de nuestro codigo creen una instancia de la clase.
    3. En nuestro modelo, aparte de tener un metodo obtenerConexion, tendremos un metodo obtenerInstancia que devuelva la instancia unica de la clase. Solo si no existe osea si es !== null, si existe devuelve la instancia unica de la clase.
    
   # En nuestro Controller:

    1. En nuestro controller, en vez de crear una instancia de la clase Model con new Model(), creamos una instancia de la clase Model con Model::obtenerInstancia().