<?php
const USER = "root"; // Usuario de la base de datos. En este caso es root pero si creaste un usuario con menos privilegios en phpmyadmin podes ponelo aca mi rey.
const PASS = ""; // Contraseña de la base de datos. En este caso es root o vacio depende de tu phpmyadmin pero si creaste un usuario con menos privilegios en phpmyadmin ponelo aca.
const SERVER = "localhost"; // Servidor de la base de datos. En este caso es localhost pero si tenes otro servidor como el de AWS ya sabes que hacer.
const DB = "examen"; // Nombre de la base de datos. No tiene perdida.
define("DSN", "mysql:host=" . SERVER . ";dbname=" . DB); // Cadena de conexion a la base de datos. 
