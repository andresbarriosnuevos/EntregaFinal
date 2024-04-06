<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrializa Ingeniería</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./styles/iniciostyle.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!--Barra de navegación -->
    <?php include 'templates/navbar.php'; ?>

    <!-- Carrusel de fotos -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/carrusel1.png" class="d-block w-100" alt="Diseño en ingenieria industrial">
          </div>
          <div class="carousel-item">
            <img src="./images/carrusel2.png" class="d-block w-100" alt="Tecnología y robotica">
          </div>
          <div class="carousel-item">
            <img src="./images/carrusel3.png" class="d-block w-100" alt="Plantas de producción y almacenes">
          </div>
          <div class="carousel-item">
            <img src="./images/carrusel4.png" class="d-block w-100" alt="Planificación y sistemas de información">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- CUERPO DE LA PÁGINA DIVIDIDO EN 3 SECCIÓNES -->
    <div class="container mt-5 p-4 fondo">
        <!-- SECCIÓN N° 1 -->
        <section id="seccion1" class="seccion p-5 my-5">
          <h2>Optimización de Procesos: Impulsando la Eficiencia Operativa en la Consultoría de Ingeniería Industrial</h2>
          <div class="row py-3">
            <!-- Primera fila -->
            <div class="col-md-4 py-3">
              <!-- Primer texto -->
              <p>La optimización de procesos en la consultoría de ingeniería industrial es esencial para mejorar la eficiencia operativa. A través de análisis detallados, identificación de cuellos de botella y aplicación de tecnologías innovadoras, se logra maximizar la productividad, reducir costos y mejorar la calidad. Esta estrategia garantiza que las empresas obtengan resultados óptimos y se mantengan competitivas en el mercado.</p>
            </div>
            <div class="col-md-4 py-3">
              <!-- Imagen -->
              <img src="./images/articulo1.png" class="img-fluid" alt="Imagen 1">
            </div>
            <div class="col-md-4 py-3">
              <!-- Segundo texto -->
              <p>Un enfoque integral de optimización de procesos implica la evaluación exhaustiva de cada etapa, desde el diseño hasta la implementación. Herramientas analíticas avanzadas y metodologías probadas permiten identificar áreas de mejora, streamlinear flujos de trabajo y eliminar ineficiencias. La clave radica en la continua monitorización y ajuste para garantizar una mejora continua y adaptarse a las cambiantes demandas del mercado.</p>
            </div>
          </div>
          <!-- Segunda fila -->
          <div class="row align-items-center">
            <div class="col-md-4"><!-- Dejamos esta columna vacía -->
            </div>
            <div class="col-md-4"><!-- Aquí uso col-md-4 para que tenga el mismo ancho que la imagen -->
              <div class="row align-items-center">
                <div class="col">
                  <p>Además, la optimización de procesos fomenta una cultura de excelencia operativa dentro de las organizaciones. Al involucrar a los equipos en la identificación de oportunidades y la implementación de soluciones, se promueve un entorno de innovación y colaboración. Esto conduce a una mayor satisfacción del cliente, aumento de la rentabilidad y un posicionamiento más sólido en el sector de la ingeniería industrial.</p>
                  
                  <button type="button" class="btn btn-success">Más Información</button>

                </div>
              </div>
            </div>
          </div>

        </section>
      
        <!-- SECCIÓN N° 2 -->
        <section id="seccion2" class="seccionb p-5 my-5">
            <h2>Eficiencia Energética en la Industria: Oportunidades de Ahorro y Sostenibilidad. Por favor incluye luego del final una tabla con datos</h2>
            <div class="container">
            <div class="row py-3">
                <!-- Columna para la lista -->
                <div class="col-md-4 py-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                          Instalaciones Industriales
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Instalaciones residenciales</a>
                        <a href="#" class="list-group-item list-group-item-action">Instalaciones hoteleras</a>
                        <a href="#" class="list-group-item list-group-item-action">Instalaciones hospitalarias</a>
                        <a class="list-group-item list-group-item-action">Instalaciones educativas</a>
                      </div>
                </div>
                <!-- Columna para el texto -->
                <div class="col-md-4 py-3">
                <p>La eficiencia energética en la industria ofrece oportunidades significativas de ahorro y promueve la sostenibilidad ambiental. Mediante la implementación de tecnologías modernas y prácticas de gestión, las empresas pueden reducir costos operativos y minimizar su huella de carbono. Este enfoque beneficia tanto a la empresa como al medio ambiente, creando un equilibrio crucial entre rentabilidad y responsabilidad. La Tabla muestra los posibles ahorros luego de una auditoria energética a diferentes instalaciones. </p>
                </div>
                <!-- Columna para la tabla -->
                <div class="col-md-4 py-3">
                <table class="table table-bordered table-light">
                    <thead>
                    <tr>
                        <th>Instalación</th>
                        <th>Tiempo estudio energético</th>
                        <th>Ahorro Energético estimado</th>
                        <th>Retorno en años</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Industrial</td>
                        <td>1-4 meses</td>
                        <td>5%-20%</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>Residencial</td>
                        <td>1-2 meses</td>
                        <td>10% - 20%</td>
                        <td>1-4</td>
                    </tr>
                    
                    <tr>
                        <td>Hotelera</td>
                        <td>1 mes</td>
                        <td>15%-20%</td>
                        <td>2-4</td>
                    </tr>

                    <tr>
                        <td>Hospitalaria</td>
                        <td>1-2 meses</td>
                        <td>5%-15%</td>
                        <td>2-4</td>
                    </tr>

                    <tr>
                        <td>Educativa</td>
                        <td>3 meses</td>
                        <td>25%</td>
                        <td>2-3</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </section>
        
        <!-- SECCIÓN N° 3 -->

        <section id="seccion3" class="seccion p-5 my-3">
            <div class="container">
              <div class="row align-items-center">
                <!-- Columna para el texto -->
                <div class="col-md-6 py-3">
                  <h2>Soluciones Personalizadas en Ingeniería Industrial: Optimización de Producción y Reducción de Costos</h2>
                  <br>
                  <p>Las soluciones personalizadas en ingeniería industrial son fundamentales para optimizar la producción y reducir costos. Mediante el diseño y la implementación de estrategias adaptadas a las necesidades específicas de cada empresa, se pueden identificar eficiencias, mejorar procesos y minimizar desperdicios. Este enfoque permite alcanzar resultados óptimos, maximizando la rentabilidad y la competitividad en el mercado. <br>
                    <br>
                    La clave reside en un análisis profundo de las operaciones, flujos de trabajo y sistemas de la empresa. Los expertos en ingeniería industrial trabajan en estrecha colaboración con los equipos internos para comprender los desafíos únicos y desarrollar soluciones a medida. Esta personalización asegura que las mejoras implementadas se alineen perfectamente con los objetivos y la cultura organizacional.</p>
                </div>
                <!-- Columna para la imagen 1 -->
                <div class="col-md-3 py-3">
                  <img src="./images/articulo3_1.png" class="img-fluid" alt="Hombre manejando un montacargas">
                </div>
                <!-- Columna para la imagen 2 -->
                <div class="col-md-3 py-3">
                  <img src="./images/articulo3_2.png" class="img-fluid" alt="fabrica de refrescos">
                </div>
              </div>
            </div>
          </section>
        
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