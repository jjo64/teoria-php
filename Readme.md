# Chavales bienvenido a mi repositorio donde vamos a intentar aprobar el examen de entorno servidor

## ¿Cómo usar este material?

1. Clona este repositorio (En tu carpeta de preferencia):
   git clone https://github.com/jjo64/teoria-php.git
2. cd teoria-php
3. Lee los archivos README.md dentro de cada carpeta para aprender cada tema.

## Temas
- [📊 MVC](ultimo-examen/MVC/README.md)
- [🔁 Patron Singleton](ultimo-examen/Patron-Singleton/README.md)
- [💼 Transacciones](ultimo-examen/Transactions/README.md)
- [📦 Composer](ultimo-examen/Composer/README.md)

---

## Cómo leer este material 

1.  **Empieza por lo básico**: Si no sabes cómo conectar PHP a una base de datos, empieza mirando **PDO**.
2.  **Estructura tu código**: Una vez entiendas PDO, mira **MVC** para aprender a ordenar tus archivos y no tener un "código espagueti".
3.  **Patrones avanzados**: Cuando domines MVC, mira **Singleton** para optimizar tus conexiones.
4.  **Gestión de librerías**: Finalmente, aprende **Composer** para instalar código de terceros.

## Consejos para practicar

*   **Paso 1**: Crea un archivo `.php` simple que conecte a MySQL y haga un `SELECT * FROM usuarios`. (Práctica PDO).
*   **Paso 2**: Intenta separar ese archivo en 3: uno que conecte, uno que tenga el HTML y uno que llame a los dos. (Práctica MVC).
*   **Paso 3**: Instala una librería con Composer (ej. `jjo64/phpdotenv`) y úsala para ocultar tu contraseña de la base de datos.

## Preguntas frecuentes / Errores comunes

*   **Error**: `Class 'PDO' not found`.
    *   **Solución**: Activa la extensión `pdo_mysql` en tu `php.ini`.
*   **Error**: `Composer command not found`.
    *   **Solución**: Asegúrate de haber instalado Composer y agregado al PATH de tu sistema.

## Glosario

*   **MVC**: Modelo-Vista-Controlador. Forma de organizar el código.
*   **Namespace**: Como "carpetas virtuales" para organizar tus clases y evitar que se mezclen nombres repetidos.
*   **Vendor**: Carpeta donde Composer guarda las librerías que descargas. ¡Nunca la toques manualmente!
*   **Patrón de Diseño**: Una solución estándar a un problema común de programación (ej. Singleton).

# Si ven que hay algun error o algo que se pueda mejorar, no duden en decirmelo.
# Like y compartan para nuevos videos. Adeu xd.

 Tu autor de confianza: jjo64 o simplemente: <a name="mi-perfil">https://github.com/jjo64/</a>
