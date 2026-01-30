# PDO

## Que es PDO ?

* PDO es una extension de PHP que permite conectar a diferentes bases de datos
* PDO es un acronimo de PHP Data Objects
* PDO es un objeto que permite conectar a diferentes bases de datos, ejecutar sentencias SQL, obtener resultados de una consulta y liberar recursos

## Caracteristicas de PDO

* PDO es un objeto que permite conectar a diferentes bases de datos, ejecutar sentencias SQL, obtener resultados de una consulta y liberar recursos

## Metodos que vamos a usar en PDO

* query()
* prepare()
* execute()
* fetch()
* fetchAll()
* rowCount()
* lastInsertId()
* beginTransaction()
* commit()
* rollBack()

### query()

* query() es un metodo que permite ejecutar una sentencia SQL simplemente pones dentro del () la sentencia SQL que quieres ejecutar y luego haces un fetchAll() para obtener los resultados -> mas adelante se va a explicar el fetch en detalle.

### prepare()

* prepare() es un metodo que permite preparar una sentencia SQL a diferencia de query() que ejecuta la sentencia SQL en el mismo momento que se ejecuta el query(), prepare() permite preparar la sentencia SQL y ejecutarla en un momento posterior. Asi envitando la inyeccion de codigo sql.

### execute()

* execute() es un metodo que permite ejecutar una sentencia SQL que se ha preparado con prepare(). El metodo como tal recibe como parametro un array con los valores de los parametros de la sentencia SQL. Array asociativo. Por ejemplo: array('id' => 1);

### fetch()

* fetch() es un metodo que permite obtener un resultado de una consulta SQL. Devuelve un array con los resultados de la consulta. El tipo de array que devuelve depende del parametro que le pases. Por ejemplo: fetch(PDO::FETCH_ASSOC); Las principales son: FETCH_ASSOC, FETCH_NUM y FETCH_BOTH:

* FETCH_ASSOC: Devuelve un array asociativo con los resultados de la consulta.
* FETCH_NUM: Devuelve un array con los resultados de la consulta.
* FETCH_BOTH: Devuelve un array con los resultados de la consulta.

### fetchAll()

* fetchAll() a diferencia de fetch() que devuelve un solo resultado, fetchAll() devuelve todos los resultados de una consulta SQL. Tambien el tipo de array que devuelve depende del parametro que le pases. Por ejemplo: fetchAll(PDO::FETCH_ASSOC); Las principales son: FETCH_ASSOC, FETCH_NUM y FETCH_BOTH:

### Diferencias entre fetch() y fetchAll()

* fetch() devuelve un solo resultado de una consulta SQL. Dicho de otra manera, devuelve un solo registro de la consulta, aunque la consulta tenga mas registros.
* fetchAll() devuelve todos los resultados de una consulta SQL. Dicho de otra manera, devuelve todos los registros de la consulta. Osea todas las filas de la consulta.

### rowCount()

* rowCount() es un metodo que permite obtener el numero de filas de una consulta SQL. Hay que tener en cuenta se lo suele usar mas para saber cuantas filas se han insertado, actualizado o eliminado. UPDATE, INSERT, DELETE.

### lastInsertId()

* lastInsertId() es un metodo que permite obtener el id de la ultima fila insertada en la base de datos. Util cuando insertamos una fila y queremos obtener el id de la fila insertada.

### beginTransaction()

* beginTransaction() es un metodo que permite iniciar una transaccion.

### commit()

* commit() es un metodo que permite confirmar una transaccion.

### rollBack()

* rollBack() es un metodo que permite deshacer una transaccion.
