<?php

    include('database.php');

    class Usuario{

        public $conexion;

        function __construct() 
        
        {
            $db = new Database();
            $this->conexion = $db->connectToDatabase();
        }

        function save($params){

            $usuario = $params['usuario'];
            $nombre = $params['nombre'];
            $apellido = $params['apellido'];
            $ano_nacimiento = $params['ano_nacimiento'];
            $celular = $params['celular'];
            $correo = $params['correo'];
            $empresa = $params['empresa'];
            $campo_accion = $params['campo_accion'];
            $ciudad = $params['ciudad'];
            $imagen = $params['imagen'];

            $insert = " INSERT INTO clientes VALUES (NULL,'$usuario','$nombre','$apellido',$ano_nacimiento,$celular,'$correo','$empresa','$campo_accion','$ciudad', '$imagen')";

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
            $usuario = $params['usuario'];
            $nombre = $params['nombre'];
            $apellido = $params['apellido'];
            $ano_nacimiento = $params['ano_nacimiento'];
            $celular = $params['celular'];
            $correo = $params['correo'];
            $empresa = $params['empresa'];
            $campo_accion = $params['campo_accion'];
            $ciudad = $params['ciudad'];
            $imagen = $params['imagen'];

            $update = " UPDATE clientes SET  usuario='$usuario', nombre='$nombre', apellido='$apellido', ano_nacimiento='$ano_nacimiento', celular='$celular', correo='$correo', empresa='$empresa', campo_accion='$campo_accion', ciudad='$ciudad', imagen='$imagen' WHERE ID= '$id' ";

            return mysqli_query($this->conexion, $update);

        }

        function delete($id){
            $delete = " DELETE FROM clientes WHERE ID=$id ";
            return mysqli_query($this->conexion, $delete);
        }

    }

?>