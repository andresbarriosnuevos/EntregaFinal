<?php


    class Usuario{

        public $conexion;

        function __construct() 
        
        {
            $db = new Database();
            $this->conexion = $db->connectToDatabase();
        }

        function save($params){

            $user = $params['user'];
            $nombre = $params['nombre'];
            $apellido = $params['apellido'];
            $anoNacimiento = $params['anoNacimiento'];
            $celular = $params['celular'];
            $email = $params['email'];
            $empresa = $params['empresa'];
            $campo = $params['campo'];
            $ciudad = $params['ciudad'];

            $insert = " INSERT INTO clientes VALUES (NULL,'$user','$nombre','$apellido',$anoNacimiento,$celular,'$email','$empresa','$campo','$ciudad')";

            return mysqli_query($this->conexion, $insert);




        }

        function getAll(){

            $sql = "SELECT * FROM clientes";
            return mysqli_query($this->conexion, $sql);


        }

        function getOne($id){

            $sql = "SELECT * FROM clientes WHERE id = $id";
            return mysqli_query($this->conexion, $sql);

        }

        function update($params){

            $id = $params['id'];
            $user = $params['user'];
            $nombre = $params['nombre'];
            $apellido = $params['apellido'];
            $anoNacimiento = $params['anoNacimiento'];
            $celular = $params['celular'];
            $email = $params['email'];
            $empresa = $params['empresa'];
            $campo = $params['campo'];
            $ciudad = $params['ciudad'];

            $update = " UPDATE clientes SET  usuario='$user', nombre='$nombre', apellido='$apellido', ano_nacimiento='$anoNacimiento', celular='$celular', correo='$email', empresa='$empresa', campo_accion='$campo', ciudad='$ciudad' WHERE ID= '$id' ";

            return mysqli_query($this->conexion, $update);

        }

    }

?>