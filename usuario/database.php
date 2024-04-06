<?php

class Database{

    /**
     * Clase de conexión a la base de datos. 
     */

    public $host = 'localhost'; //Servidor
    public $user = 'root'; //Usuario de phpMyadmin
    public $password = '1970'; //contraseña de phpMyadmin
    public $database = 'clientes_consultoria'; //Nombre de la base de datos
    public $connect; //Conexión a la base de datos

    function connectToDatabase() {
        $this->connect = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (mysqli_connect_error()) {
            
            echo 'No se pudo conectar a la base de datos: '. mysqli_connect_error();
        }

        return $this->connect;
    }
}

?>