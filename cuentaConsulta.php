<?php
if (!class_exists('Usuario')) {
    include('./usuario/usuario.php');
}

//Iniciar SESSION
//session_start();
//if (isset($_SESSION['usuario_id'])) {
//    $usuario_id = $_SESSION['usuario_id'];
//} 

// Para agregar nueva consulta
$mensajeConsulta = ''; 
if (!empty($_POST)) {
    $uc = new Usuario();
    $save = $uc->saveConsulta($_POST);
    if ($save) {
        $mensajeConsulta = '<div class="alert alert-success"> Sesión registrada </div>';
        header("Location: cuenta.php");
    } else {
        $mensajeConsulta = '<div class="alert alert-danger"> Error al registrar </div>';
    }
} else {
    $mensajeConsulta = '<div class="alert alert-danger"> No se han enviado datos </div>';
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Consulta</title>
    <link rel="stylesheet" href="./styles/serviciosstyle.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
        <!-- Formulario para Agregar nueva Consulta -->
        <div class="container">
            <form method="post" action="cuentaConsulta.php" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="asunto" class="col-sm-2 col-form-label">Asunto:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="asunto" name="asunto" required>
                    </div>
                    <input type="hidden" name="IdUsuario" id="IdUsuario" value="<?php echo $usuario_id; ?>">
                </div>

                <div class="mb-3 row">
                    <label for="objetivos" class="col-sm-2 col-form-label">Objetivos del proyecto:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="objetivos" name="objetivos" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="detalles" class="col-sm-2 col-form-label">Detalles del proyecto:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="detalles" name="detalles" rows="5" required></textarea>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>