# Transactions

* Las transacciones son un conjunto de operaciones que se ejecutan como una sola unidad. 
* Si alguna de las operaciones falla, todas las operaciones se deshacen.
* Si todas las operaciones se ejecutan correctamente, todas las operaciones se guardan.

* Para empezar una transaccion
    * $this->db->beginTransaction();

* Para hacer un commit
    * $this->db->commit();

* Para hacer un rollback
    * $this->db->rollBack();

    # Que hay entre medio de cada una de estas operaciones?

    * Entre beginTransaction() y commit() se pueden hacer todas las querys que queramos.
    * Si alguna de las querys falla, todas las querys se deshacen (rollBack()).
    * Si todas las querys se ejecutan correctamente, todas las querys se guardan (commit()).

    # Como controlar que llegue al rollback?

        # try {
        #     $this->db->beginTransaction();
        #     // Hacer las querys
        #     $this->db->commit();
        # } catch (PDOException $e) {
        #     $this->db->rollBack();
        # }

    # Punto importante sobre querys:

        * La mayoria van a funcionar con preapare -> porque casi siempre vas a recibir parametros en la funcion. Osea que estas recogiendo datos del cliente. Te puede mandar datos corruptos, sin validar o inyeccion de codigo.

    # Metodos Soportes (PDO)

        * rowCount() -> Nos devuelve las filas afectadas de una query (Si nos devuelve 0 la query se ejecuto pero no realizó ningun cambio)

    # Ejemplo practico:

    * Tenemos una tabla llamada cuentas con dos columnas: id y saldo.
    * Tenemos dos cuentas: cuenta1 y cuenta2.
    * Queremos transferir 100 de cuenta1 a cuenta2.
    * Si hacemos la operacion sin transaccion, podria pasar que se reste el dinero de cuenta1 pero no se sume a cuenta2, por lo que el dinero se perderia.
    * Con transaccion, si alguna de las operaciones falla, todas las operaciones se deshacen.