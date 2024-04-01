<?php

include('usuario.php');


$mensaje = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

    if (!empty($_POST)) {
        
        $u = new Usuario();
        $du = mysqli_fetch_Object($u->getOne($_GET['id']));
        

        $update = $u->update($_POST);
        
        if ($update) {
            $mensaje = '<div class="alert alert-success"> Sesión registrada </div>';
        } else {
            $mensaje = '<div class="alert alert-danger"> Error al registrar </div>';
        }
    } else {
        
        $mensaje = '<div class="alert alert-danger"> No se han enviado datos </div>';
    }
}


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuarios</title>
    <link rel="stylesheet" href="./styles/serviciosstyle.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!--Barra de navegación -->
    <?php include './templates/navbar.php'; ?>


    <!-- Cuerpo de la página -->
    <?php include './templates/navbar.php'; ?>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>