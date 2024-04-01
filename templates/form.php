
    <!-- Formulario -->
    <div class="container" style="background-color: whitesmoke; max-width: 800px;">
        <br>
        <br>
        <h1 class="text-center" style="color: rgb(0, 102, 102);"> Registrar Usuario </h1>
        <br>


        <form action="registro.php" method="post">
            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $du->nombre ?>"  >
                </div>
                <input type="hidden" name="id" id="id" value="<?= $du->id ?>">
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputApellido" class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="apellido" id="apellido" value="<?= $du->apellido ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputUser" class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="user" id="user" value="<?= $du->user ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputAnoNacimiento" class="col-sm-2 col-form-label">Año de Nacimiento</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="anoNacimiento" id="anoNacimiento" value="<?= $du->anoNacimiento ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputCelular" class="col-sm-2 col-form-label">Celular</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="celular" id="celular" value="<?= $du->celular ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" value="<?= $du->email ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputEmpresa" class="col-sm-2 col-form-label">Empresa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="empresa" id="empresa" value="<?= $du->empresa ?>" >
                </div>
            </div>

            <div class="row mb-3" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputCampo" class="col-sm-2 col-form-label">Campo de Acción</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="campo" id="campo" value="<?= $du->campo ?>" >
                </div>
            </div>

            <div class="row mb-5" style="padding-left: 80px; padding-right: 80px;">
                <label for="inputCiudad" class="col-sm-2 col-form-label">Ciudad</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="ciudad" id="ciudad" value="<?= $du->ciudad ?>" >
                </div>
            </div>

            <div style="text-align: center;">
                <button type="submit" class="btn btn-success">Registrar</button>
            </div>
            <br>
            <br>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    