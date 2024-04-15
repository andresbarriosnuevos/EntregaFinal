<?php

if (!class_exists('Usuario')) {
    include('./usuario/usuario.php');
}

include_once('config/functions.php');



//Iniciar SESSION
session_start();
if (isset($_SESSION['usuario_id'])) {
    $usuario_id = $_SESSION['usuario_id'];
} 

// Si es el administrador, debe entrar a otra página
if ($usuario_id==1) {
    header("Location: admin.php");
    exit();
}

$u = new Usuario();
$usuario = $u -> ObtenerUsuarioPorId($usuario_id);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta</title>
    <link rel="stylesheet" href="./styles/serviciosstyle.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    

    <!--Barra de navegación -->
    <?php include 'templates/navbar.php'; ?>


    <!-- Pestañas -->
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Nueva Consulta</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Editar Datos</button>

    </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active p-5" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
        <!-- Formulario para Agregar nueva Consulta -->
        <?php include 'cuentaConsulta.php'; ?>
    </div>

    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

        <!-- Formulario editar datos de usuario-->
        <?php include 'cuentaEditarPerfil.php'; ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>


<footer class="py-4 text-light ">
    <?php include 'templates/footer.php'; ?>
</footer>


</html>