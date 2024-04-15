<?php

if (!class_exists('Usuario')) {
    include('./usuario/usuario.php');
}

$u = new Usuario();



if (isset($_POST['consultaId']) && isset($_POST['revisada'])) {
    $consultaId = $_POST['consultaId'];
    $revisada = $_POST['revisada'];

    
    $u->updateConsulta($consultaId, $revisada);

    echo 'Consulta actualizada correctamente';
}
?>