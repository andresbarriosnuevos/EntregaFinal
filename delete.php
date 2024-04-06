<?php
include('usuario/usuario.php');
//include('database.php');

$mensaje = '';


$u = new Usuario();
//$du = mysqli_fetch_object($u->getOne($_GET['id']));


if (!empty($_GET)) {

    $id = $_GET['id'];
    
    $remove = $u->delete($id);
    header("Location: usuarios.php?mensaje=" . urlencode("Usuario Eliminado correctamente")); 

}

?>