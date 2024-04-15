<?php
    
    if (!class_exists('Usuario')) {
        include('./usuario/usuario.php');
    }
    

    $u = new Usuario();
    $data = $u->getAll();

    if (isset($_GET['mensaje'])) {
        echo '<div class="alert alert-success" role="alert">' . htmlspecialchars($_GET['mensaje']) . '</div>';
    }

    $uc = new Usuario();
    $dataConsultas = $uc->getAllConsulta();

    //Iniciar SESSION
    session_start();
    if (isset($_SESSION['usuario_id'])) {
    $usuario_id = $_SESSION['usuario_id'];
    } 

    $uc = new Usuario();
    $usuario = $uc -> ObtenerUsuarioPorId($usuario_id);
    

    



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

    

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-clientes-tab" data-bs-toggle="tab" href="#nav-clientes" role="tab" aria-controls="nav-clientes" aria-selected="true">Usuarios</a>
            <a class="nav-item nav-link" id="nav-consultas-tab" data-bs-toggle="tab" href="#nav-consultas" role="tab" aria-controls="nav-consultas" aria-selected="false">Consultas</a>
        </div>
    </nav>  

    <div class="tab-content" id="nav-tabContent">
        
        <div class="tab-pane fade show active" id="nav-clientes" role="tabpanel" aria-labelledby="nav-clientes-tab">
            <!-- Lista de Usuarios -->
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
        </div>
        


        <div class="tab-pane fade" id="nav-consultas" role="tabpanel" aria-labelledby="nav-consultas-tab">
            <!-- Lista de Consultas -->

            <div class="container">
                
                <h1 class="text-center mb-3"> Lista de Consultas </h1>

                <div>
                    <h4 class="card-title">Consultas</h4>
                    <div class="table-responsive">
                        <table class="table table-light table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">ID Usuario</th>
                                    <th scope="col">Empresa</th>     
                                    <th scope="col">Asunto</th>
                                    <th scope="col">Objetivos</th>
                                    <th scope="col">Detalles</th>
                                    <th scope="col">Revisada</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dataConsultas as $consulta) : ?>
                                <tr>
                                    <td><?php echo $consulta['ID']; ?></td>
                                    <td><?php echo $consulta['IdUsuario']; ?></td>
                                    <?php $empresa = $u->ObtenerEmpresaPorId($consulta['IdUsuario']) ?>
                                    <td><?php echo $empresa; ?></td>
                                    <td><?php echo $consulta['asunto']; ?></td>
                                    <td><?php echo $consulta['objetivos']; ?></td>
                                    <td><?php echo $consulta['detalles']; ?></td>
                                    <td>
                                        <input type="checkbox" data-id="<?php echo $consulta['ID']; ?>" <?php echo $consulta['revisada'] ? 'checked' : ''; ?> />
                                    </td>                     
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    $('input[type="checkbox"]').click(function() {
        var consultaId = $(this).data('id');
        var revisada = $(this).is(':checked') ? 1 : 0;

        $.ajax({
            url: 'editConsulta.php',
            type: 'post',
            data: {
                consultaId: consultaId,
                revisada: revisada
            },
            success: function(response) {
                alert(response);
            }
        });
    });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
</body>

<footer class="py-4 text-light ">
    <?php include 'templates/footer.php'; ?>
</footer>

</html>