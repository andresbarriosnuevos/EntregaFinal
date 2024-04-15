<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrializa Ingeniería</title>
    <link rel="stylesheet" href="styles/serviciosstyle.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!--Barra de navegación -->
    <?php include 'templates/navbar.php'; ?>

    <!-- Cuerpo de la página -->
    <div class="container mt-5 p-4 fondo">

      <h1 class="text-center">Nuestros Servicios</h1>
        <!-- SECCIÓN N° 1 -->
        <section id="seccion1" class="seccion p-4 my-5">
            <div class="container">
              <div class="row align-items-center">
                <!-- Parte 1: Texto e Imagen 1 -->
                <div class="col-md-6">
                  <div class="row py-3 align-items-center">
                    <div class="col py-3">
                      <h2>Auditoría y Eficiencia Energética</h2>
                      <p>Realizamos auditorías detalladas para identificar oportunidades de ahorro energético en tu empresa. Implementamos soluciones eficientes que reducen el consumo de energía y los costos asociados, alineados con prácticas sostenibles para mejorar el rendimiento ambiental y económico.</p>
                    </div>
                    <div class="col">
                      <img src="./images/servicio1.png" class="img-fluid" alt="imagen alusiva a la eficiencia energética.">
                    </div>
                  </div>
                </div>
                <!-- Parte 2: Texto e Imagen 2 -->
                <div class="col-md-6">
                  <div class="row py-3 align-items-center">
                    <div class="col py-3">
                      <h2>Optimización de Procesos de Manufactura</h2>
                      <p>Nuestra consultoría se enfoca en mejorar la eficiencia de los procesos de manufactura, reduciendo tiempos, recursos y costos. Implementamos estrategias innovadoras para optimizar cada etapa de producción, maximizando la productividad y la rentabilidad de tu empresa.</p>
                    </div>
                    <div class="col">
                      <img src="./images/servicio2.png" class="img-fluid" alt="Hombre inspeccionando linea de producción">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <!-- SECCIÓN N° 2 -->
        <section id="seccion1" class="seccionb p-4 my-5">
            <div class="container mt-4">
              <div class="row">
                <!-- Parte 1: Texto e Imagen 1 -->
                <div class="col-md-6">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <iframe width="280" height="auto" src="https://www.youtube.com/embed/0Ok2dKEtkX8" title="¿Qué es el control de la calidad?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                      <h2>Gestión de Calidad y Control</h2>  
                      <p>Garantizamos la calidad de tus productos mediante rigurosos controles y procesos de mejora continua. Nuestra consultoría se enfoca en establecer estándares de calidad, implementar sistemas de control y asegurar la conformidad con las normativas y expectativas de tus clientes.</p>
                    </div>
                  </div>
                </div>
                <!-- Parte 2: Texto e Imagen 2 -->
                <div class="col-md-6">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <iframe width="280px" height="auto" src="https://www.youtube.com/embed/UKnPT3kpvaI" title="Así diseñamos una PLANTA INDUSTRIAL | Ingeniería Industrial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                      <h2>Análisis de Capacidad y Layout</h2>  
                      <p>Evaluamos la capacidad de producción de tu empresa y diseñamos layouts eficientes para optimizar el flujo de trabajo. Nuestro enfoque se centra en maximizar el uso de recursos y minimizar los tiempos de producción, asegurando una distribución óptima de equipos y espacios.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    
            <!-- SECCIÓN N° 3 -->

        <section id="seccion3" class="seccion p-4 my-5">
            <div class="container">
              <div class="row py-3 align-items-center">
                <!-- Columna para el texto -->
                <div class="col-md-6 py-3">
                  <h2>Diseño de Sistemas de Gestión Integrados</h2>
                  <p>En Ingenia Consultores, nos comprometemos a desarrollar sistemas de gestión integrados que abarquen todos los aspectos críticos de tu empresa. Nuestros expertos trabajan en estrecha colaboración contigo para diseñar un sistema personalizado que integre la calidad, el medio ambiente, la salud y la seguridad laboral. Desde la evaluación inicial hasta la implementación y el seguimiento continuo, nuestro enfoque holístico garantiza el cumplimiento normativo y la mejora continua en todos los ámbitos operativos. <br>
                    <br>
                  A través de herramientas avanzadas y mejores prácticas, optimizamos la eficiencia, reducimos los riesgos y promovemos la sostenibilidad a largo plazo para tu empresa. Confía en nosotros para fortalecer la base de tu organización y alcanzar nuevos niveles de excelencia empresarial.</p>
                </div>
                <!-- Columna para la imagen 1 -->
                <div class="col-md-3">
                  <img src="./images/servicio5_1.png" class="img-fluid" alt="niña plantando un arbol">
                </div>
                <!-- Columna para la imagen 2 -->
                <div class="col-md-3">
                  <img src="./images/servicio5_2.png" class="img-fluid" alt="trabajadores reunidos">
                </div>
              </div>
            </div>
          </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<footer class="py-4 text-light ">
    <?php include 'templates/footer.php'; ?>
</footer>


</html>