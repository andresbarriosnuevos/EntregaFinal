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
            $contrasena = $params['contrasena'];
            $nombre = $params['nombre'];
            $apellido = $params['apellido'];
            $ano_nacimiento = $params['ano_nacimiento'];
            $celular = $params['celular'];
            $correo = $params['correo'];
            $empresa = $params['empresa'];
            $campo_accion = $params['campo_accion'];
            $ciudad = $params['ciudad'];
            $imagen = $params['imagen'];

            $insert = " INSERT INTO clientes VALUES (NULL,'$usuario', '$contrasena','$nombre','$apellido',$ano_nacimiento,$celular,'$correo','$empresa','$campo_accion','$ciudad', '$imagen')";

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

        function verificar($usuario, $contrasena){

            $consulta = "SELECT * FROM clientes WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
            $resultado = mysqli_query($this->conexion, $consulta);
            if (mysqli_num_rows($resultado) == 1) {
                return true; // Usuario válido
            } else {
                return false; // Usuario inválido
            }

        }
        function update($params){

            $id = $params['id'];
            $usuario = $params['usuario'];
            $contrasena = $params['contrasena'];
            $nombre = $params['nombre'];
            $apellido = $params['apellido'];
            $ano_nacimiento = $params['ano_nacimiento'];
            $celular = $params['celular'];
            $correo = $params['correo'];
            $empresa = $params['empresa'];
            $campo_accion = $params['campo_accion'];
            $ciudad = $params['ciudad'];
            $imagen = $params['imagen'];

            $update = " UPDATE clientes SET  usuario='$usuario', contrasena='$contrasena', nombre='$nombre', apellido='$apellido', ano_nacimiento='$ano_nacimiento', celular='$celular', correo='$correo', empresa='$empresa', campo_accion='$campo_accion', ciudad='$ciudad', imagen='$imagen' WHERE ID= '$id' ";

            return mysqli_query($this->conexion, $update);

        }

        function delete($id){
            $delete = " DELETE FROM clientes WHERE ID=$id ";
            return mysqli_query($this->conexion, $delete);
        }


        function ObtenerIdPorUsuario($usuario){
            $consulta = "SELECT ID FROM clientes WHERE usuario = '$usuario'";
            $resultado = mysqli_query($this->conexion, $consulta);
            if (mysqli_num_rows($resultado) == 1) {
                $fila = mysqli_fetch_assoc($resultado);
                $idUsuario = $fila['ID'];
                return $idUsuario;
            } else {
                return false; // Usuario inválido
            }


        }

        function ObtenerEmpresaPorId($id){
            $consulta = "SELECT empresa FROM clientes WHERE ID = '$id'";
            $resultado = mysqli_query($this->conexion, $consulta);
            if (mysqli_num_rows($resultado) == 1) {
                $fila = mysqli_fetch_assoc($resultado);
                $empresa = $fila['empresa'];
                return $empresa;
            } else {
                return false; // Usuario inválido
            }
        }

        function ObtenerUsuarioPorId($id){
            $consulta = "SELECT usuario FROM clientes WHERE ID = '$id'";
            $resultado = mysqli_query($this->conexion, $consulta);
            if (mysqli_num_rows($resultado) == 1) {
                $fila = mysqli_fetch_assoc($resultado);
                $usuario = $fila['usuario'];
                return $usuario;
            } else {
                return false; // Usuario inválido
            }
        }

        function saveConsulta($params){

            $IdUsuario = $params['IdUsuario'];
            $asunto = $params['asunto'];
            $objetivos = $params['objetivos'];
            $detalles = $params['detalles'];
            $revisada = 0;


            $insert = " INSERT INTO consultas VALUES (NULL,'$IdUsuario', '$asunto','$objetivos','$detalles', '$revisada')";

            return mysqli_query($this->conexion, $insert);

        }

        function getAllConsulta(){

            $sql = "SELECT * FROM consultas";
            return mysqli_query($this->conexion, $sql);
        }

        function getOneConsulta($id){

            $sql = "SELECT * FROM consultas WHERE id = $id";
            return mysqli_query($this->conexion, $sql);
        }

        function updateConsulta($consultaId, $revisada){

            $update = " UPDATE consultas SET  revisada='$revisada' WHERE ID= '$consultaId' ";

            return mysqli_query($this->conexion, $update);
        }

    }

?>