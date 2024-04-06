<?php
    include('./usuario/usuario.php');

    $u = new Usuario();
    $data = $u->getAll();

    if (isset($_GET['mensaje'])) {
        echo '<div class="alert alert-success" role="alert">' . htmlspecialchars($_GET['mensaje']) . '</div>';
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="./styles/serviciosstyle.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!--Barra de navegación -->
    <?php include 'templates/navbar.php'; ?>


    <!-- Cuerpo de la página -->
    <div class="container">
        
        <h1 class="text-center mb-3"> Lista de Usuarios </h1>

        <div>
            <h4 class="card-title">Clientes</h4>
            <div class="table-responsive">
                <table class="table table-light table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Año de Nacimiento</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Empresa</th>
                            <th scope="col">Campo de Acción</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $cliente) : ?>
                        <tr>
                             
                            <td><?php echo $cliente['ID']; ?></td>
                            <td><?php echo "<img src='images/" . $cliente['imagen'] . "' width='50' height= '50' />"; ?></td>
                            <td><?php echo $cliente['usuario']; ?></td>
                            <td><?php echo $cliente['nombre']; ?></td>
                            <td><?php echo $cliente['apellido']; ?></td>
                            <td><?php echo $cliente['ano_nacimiento']; ?></td>
                            <td><?php echo $cliente['celular']; ?></td>
                            <td><?php echo $cliente['correo']; ?></td>
                            <td><?php echo $cliente['empresa']; ?></td>
                            <td><?php echo $cliente['campo_accion']; ?></td>
                            <td><?php echo $cliente['ciudad']; ?></td>  
                            <td>
                                <a name="editar_cliente" id="editar_cliente" class="btn btn-info" href="edit.php?id=<?php echo $cliente['ID']; ?>" role="button">Editar</a>
                            </td> 
                            <td>
                                <a name="eliminar_cliente" id="eliminar_cliente" class="btn btn-danger" href="delete.php?id=<?php echo $cliente['ID']; ?>" role="button">Eliminar</a>
                            </td>                     
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>  
    
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
</body>

<footer class="py-4 text-light ">
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <img src="./images/logo.png" class="footer-logo" alt="logo de la empresa">
            </div>

            <div class="col-md-3">
                <h5>Información</h5>
                <ul>
                    <li class="py-1">Luis Andrés Barriosnuevos</li>
                    <li class="py-1">Desarrollo Web</li>
                    <li class="py-1">Programa de Ingeniería Industrial</li>
                    <li class="py-1">Corporación Universitaria Iberoamericana</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Redes Sociales</h5>
                <ul>
                    <li class="py-2">
                        <a href="index.php"><img src="./images/whatsapp-icon.png" class="img-footer" alt="WhatsApp"> WhatsApp</a>
                    </li>
                    <li class="py-2">
                        <a href="index.php"><img src="./images/instagram-icon.png" class="img-footer" alt="Instagram"> Instagram</a>
                    </li>
                    <li class="py-2">
                        <a href="index.php"><img src="./images/facebook-icon.png" class="img-footer" alt="Facebook"> Facebook</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Links de Interés</h5>
                <ul>
                    <li class="py-1"><a href="https://www.ibero.edu.co/">IBERO</a></li>
                    <li class="py-1"><a href="https://getbootstrap.com/">Bootstrap</a></li>
                    <li class="py-1"><a href="index.php">Contáctanos</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</html>