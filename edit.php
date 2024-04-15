<?php
if (!class_exists('Usuario')) {
    include('./usuario/usuario.php');
}
include_once('config/functions.php');


$mensaje = '';

$u = new Usuario();

$du = mysqli_fetch_object($u->getOne($_GET['id']));
//var_dump($_POST);

if (!empty($_POST)) {
    $_POST['imagen'] = $du->imagen;
    //var_dump($_FILES);
    if ( $_FILES['imagen']['name'] !== '' ) {
        $_POST['imagen'] = saveImages($_FILES);
    }
    
    $update = $u->update($_POST);
    if($update){
        $mensaje = '<div class="alert alert-success" role="alert" >Usuario actualizado correctamente</div>';
        header("Location: usuarios.php?mensaje=" . urlencode("Usuario actualizado correctamente"));
    }else{
        $mensaje = '<div class="alert alert-danger" role="alert" >Error</div>';
        
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
    <?php include 'templates/navbar.php'; ?>

    <div class="container" style="background-color: whitesmoke; max-width: 800px; padding-bottom: 1px;">
        <br>
        <h1 class="text-center" style="color: rgb(0, 102, 102);"> Modificar Usuario </h1>
      
    </div>

    <!-- Mostrar mensaje de error si existe -->
    <?php echo $mensaje; ?>


    <!-- Formulario -->
    <div class="container" style="background-color: whitesmoke; max-width: 800px;">
        <br>
        <br>


        <form method="post" enctype="multipart/form-data">
            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= isset($du) ? $du->nombre : '' ?>"  >
                </div>
                <input type="hidden" name="id" id="id" value="<?= isset($du) ? $du->ID : '' ?>">
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputApellido" class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="apellido" id="apellido" value="<?= isset($du) ? $du->apellido : '' ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputUsuario" class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="usuario" id="usuario" value="<?= isset($du) ? $du->usuario : '' ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputContrasena" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="contrasena" id="contrasena" value="<?= isset($du) ? $du->contrasena : '' ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputAno_nacimiento" class="col-sm-2 col-form-label">Año de Nacimiento</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="ano_nacimiento" id="ano_nacimiento" value="<?= isset($du) ? $du->ano_nacimiento : '' ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputCelular" class="col-sm-2 col-form-label">Celular</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="celular" id="celular" value="<?= isset($du) ? $du->celular : '' ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputCorreo" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="correo" id="correo" value="<?= isset($du) ? $du->correo : '' ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputEmpresa" class="col-sm-2 col-form-label">Empresa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="empresa" id="empresa" value="<?= isset($du) ? $du->empresa : '' ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputCampo_accion" class="col-sm-2 col-form-label">Campo de Acción</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="campo_accion" id="campo_accion" value="<?= isset($du) ? $du->campo_accion : '' ?>" >
                </div>
            </div>

            <div class="row mb-5" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputCiudad" class="col-sm-2 col-form-label">Ciudad</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="ciudad" id="ciudad" value="<?= isset($du) ? $du->ciudad : '' ?>" >
                </div>
            </div>

            <div class="row mb-5" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputCiudad" class="col-sm-2 col-form-label">Foto de perfil</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" name="imagen" id="imagen" value="<?= isset($du) ? $du->imagen : '' ?>" >
                </div>
            </div>

            <div style="text-align: center;">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
            <br>
            <br>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>


<footer class="py-4 text-light ">
    <?php include 'templates/footer.php'; ?>
</footer>


</html>