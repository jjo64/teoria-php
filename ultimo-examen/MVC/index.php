<?php
require 'Controller.php';
$controlador = new Controller(); //Creamos un objeto de tipo Controller

/*
Primero requerimos Controller.php para obtener todo lo que hay en este archivo:
    1ero Tenemos el constructor de la clase Controller el cual se encarga de crear un objeto de tipo Model y obtener la conexion a la base de datos.
    2do Tenemos la clase Controller la cual tiene todos sus metodos (querys)
    3ero Si nos fijamos en ese archivo tambien hace un require de Model.php por lo que ya tendriamos la conexion a la base de datos.
        - Osea que importa las cosas necesarias de Model.php
        - Model.php importa las cosas necesarias de config.php
        - Y config.php tiene las constantes para conectar a la base de datos.
        - Viste como va en cadena? Es como si fuera seguir las migas de pan de Hansel y Gretel para no perderse del camino original.
 */
/*
    En este caso, no estamos usando el modelo para crear tablas, sino para obtener datos de una tabla que ya existe.
    Por lo que no necesitamos crear tablas, solo obtener datos.

    Hay que tener en cuenta que para usar los metodos de una clase en espacial hay que crear un objeto de dicha clase.

    Estamos en index, y tenemos una clase Vehiculo que tiene el metodo arrancar().
    Para poder usar ese metodo, necesitamos crear un objeto de tipo Vehiculo.
    
 */

