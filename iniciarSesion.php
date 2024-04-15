<?php
include_once('usuario/usuario.php');
include_once('config/functions.php');

$mensaje = '';

$u = new Usuario();

if (!empty($_POST)) {

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    
    $valido = $u->verificar($usuario, $contrasena);
    if($valido){
        session_start();
        $_SESSION['usuario_id']= $u->ObtenerIdPorUsuario($usuario);
        $mensaje = '<div class="alert alert-success" role="alert" >Inicio de Sesión Exitoso</div>';
        header("Location: cuenta.php?mensaje=");
    }else{
        $mensaje = '<div class="alert alert-danger" role="alert" >Usuario o contraseña incorrectos</div>';
        
    } 
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="./styles/serviciosstyle.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    

    <!--Barra de navegación -->
    <?php include 'templates/navbar.php'; ?>

    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="./images/login1.png" class="img-fluid" alt="imagen de login" style="max-width: 200px; margin-bottom: 20px;">
                    </div>
                    <h3 class="card-title text-center">Iniciar Sesión</h3>
                    
                    <?php if(isset($mensaje) && !empty($mensaje)): ?>
                        <?php echo $mensaje; ?>
                    <?php endif; ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>


<footer class="py-4 text-light ">
    <?php include 'templates/footer.php'; ?>
</footer>


</html>