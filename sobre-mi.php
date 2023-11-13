<?php
$pagina = "sobre-mi" ?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre mi</title>
  <link rel="stylesheet" href="css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
  <script src="css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/css/all.min.css">
  <link rel="stylesheet" href="estiloss.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
  <header class="container">
    <?php include_once "menu.php" ?>
  </header>
  <main>
    <section id="bio" class="container">
      <div class="row">
        <div class="col-12 py-4">
          <h1>Sobre mi</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6">
          <p>Siempre me a gustado la programacion, y estoy implementandola ahora</p>
        </div>
        <a href="contacto.html" class="btn btn-rojo my-5 d-none d-sm-block w-25">Enviar mensaje</a>
        <div class="col-10 col-sm-3 py-5 pe-5 d-none d-sm-block">
          <img src="imagenes/img jeremy.png" alt="jeremy" class="img-fluid">
        </div>
    </section>
    <section id="stack">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="py-5">Stack tecnologico</h2>
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">Javascript</h3>
              <i class="fa-brands fa-js pb-5">
              </i>
            </div>
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">PHP</h3>
              <i class="fa-brands fa-php pb-5"></i>
            </div>
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">HTML</h3>
              <i class="fa-brands fa-html5 pb-5"></i>
            </div>
          </div>
          <div class="co-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">API Rest</h3>
              <i class="fa-solid fa-gears pb-5"></i>
            </div>
          </div>
          <div class="co-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">Laravel</h3>
              <i class="fa-brands fa-laravel pb-5"></i>
            </div>
          </div>
          <div class="co-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">Bootstrap</h3>
              <i class="fa-brands fa-bootstrap pb-5"></i>
            </div>
          </div>
          <div class="co-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">MySQL</h3>
              <i class="fa-solid fa-database pb-5"></i>
            </div>
          </div>
          <div class="co-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">CSS</h3>
              <i class="fa-brands fa-css3-alt pb-5"></i>
            </div>
          </div>
          <div class="co-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">GIT</h3>
              <i class="fa-brands fa-git pb-5"></i>
            </div>
          </div>
          <div class="co-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">React.js</h3>
              <i class="fa-brands fa-react pb-5"></i>
            </div>
          </div>
          <div class="co-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">Mercadopago</h3>
              <i class="fa-solid fa-wallet pb-5"></i>
            </div>
          </div>
          <div class="co-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">Amazon AWS</h3>
              <i class="fa-brands fa-aws pb-5"></i>
            </div>
          </div>
          <div class="co-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">Linux</h3>
              <i class="fa-brands fa-linux pb-5"></i>
            </div>
          </div>
          <div class="co-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">Apache</h3>
              <i class="fa-solid fa-server pb-5"></i>
            </div>
          </div>
          <div class="co-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">Paypal</h3>
              <i class="fa-brands fa-paypal pb-5"></i>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="experiencia" class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="pt-5 pb-4">Experiencia laboral</h2>
        </div>
      </div>
      <div class="row shadow">
        <div class="col-sm-2 d-none d-sm-block p-5">
          <img src="imagenes/primer trabajo.png" alt="Gamefire" class="img-fluid">
        </div>
        <div class="col-sm-10 col-12 my-3">
                  <h3>Vendedor</h3>
                  <h4>Gamefire</h4>
                  <h5>2016 - 2019</h5>
                  <p>Facturación  Cobranza  Atención al cliente  Atencion a Proveedores de manera presencial y vian telefonica  Elaboracion de exhibición y vitrina  Manejo de redes sociales en ventas Online Entre otros. </p>
        </div>

        <div class="col-sm-2 d-none d-sm-block p-5">
          <img src="imagenes/gp bikes.png" alt="Gamefire" class="img-fluid">
        </div>
        <div class="col-sm-10 col-12 my-3">
                  <h3>Operario de Deposito</h3>
                  <h4>Gp Bikes</h4>
                  <h5>2020 - 2021</h5>
                  <p>Recepción de mercancía - Ingreso de mercaderia al sistema - Etiquetar mercaderia por rubro - Ubicar la mercaderia en el rack  Clasificacion y elaboracion de Inventario - Manejo del programa Jazz  Elaboracion y Archivado de  remitos  Control y armado de pedidos y control de stock inmediato.</p>
        </div>
        <div class="col-sm-2 d-none d-sm-block p-5">
          <img src="imagenes/susini.png" alt="SusiniBordados" class="img-fluid">
        </div>
        <div class="col-sm-10 col-12 my-3">
                  <h3>Operador de Maquina</h3>
                  <h4>Susini Bordados</h4>
                  <h5>2021 - 2022</h5>
                  <p>Operador de maquina de bordado: interpretar ficha técnica y solicitud del cliente para empezar el proceso de trabajo - Preparar máquina, herramientas e insumos a utilizar en el proceso de bordado - Realizar las operaciones de bordado, según las especificaciones y exigencias del cliente  Cumplimiento de estándares de calidad y normas de seguridad e higiene establecidas.</p>
        </div>
        <div class="col-sm-2 d-none d-sm-block p-5">
          <img src="imagenes/nahana.png" alt="Nahana Jeans" class="img fluid">
        </div>
        <div class="col-sm-10 col-12 my-3">
                  <h3>Encargado de Deposito</h3>
                  <h4>Nahana Jeans</h4>
                  <h5>2022 - Actualmente</h5>
                  <p>Ejecucion de control de calidad inmediato  Control de inventario y mercaderia proveniente de lavadero y talleres  Almacenamiento de mercaderia por tipo y modelo  Preparacion y embalado de pedidos para su respectivo despacho (sea Mercado libre  Correo Argentino  Expreso o Domicilio)  Elaboracion de armado de pedidos (por modelo y cantidad de prendas)  Recepción, verificacion y control de todos los productos que comprendan devolucion  Manejo y control de reposicion para locales comerciales.</p>
        </div>
      </div>  
    </section>
    <section id="formacion" class="container">
    <div class="row">
      <div class="col-12 pt-5 pb-4">
        <h2>Formacion Academica</h2>
      </div>
      <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/paulo vi.png" alt="Paulo Vi" class="img-fluid baw" title="Paulo Vi">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Educacion Primaria</h3>
                            <h4>Unidad educativa Paulo VI</h4>
                            <h5>2005 – 2011</h5>
                            <p>https://www.instagram.com/uecentropaulovi/?hl=en</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                          <img src="imagenes/fernando de magallanes.png" alt="Fernando Magallanes" class="img-fluid baw" title="Fernando Magallanes">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Bachiller en ciencias</h3>
                            <h4>Unidad educativa Paulo VI</h4>
                            <h5>2011 – 2016</h5>
                            <p>https://www.facebook.com/p/UE-instituto-n%C3%A1utico-Fernando-de-Magallanes-100064217947222/</p>
                        </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                          <img src="imagenes/humbolt.png" alt="humbolt" class="img-fluid baw" title="Universidad humbolt">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Educacion Universitaria</h3>
                            <h4>Universidad Alejandro de Humboldt</h4>
                            <h5>2016 – 2019</h5>
                            <p>https://unihumboldt.edu.ve/</p>
                        </div>
                    </div>
                </div>
      </section>
      <section id="formacion" class="container">

              <div class="row">
                <div class="col-12 pt-5 pb-4">
                  <h2>Cursos de desarrollo Profesional</h2>
                </div>
              </div>
              <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                          <img src="imagenes/Rio negro.png" alt="Rio Negro" class="img-fluid baw" title="Universidad Rio negro">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                          <h3>Conceptos de Ciberseguridad</h3>
                          <h4>Gestion de incidentes en Ciberseguridad</h4>
                          <h5>Aplicaciones practicas en Ciberseguridad</h5>
                          <h5>2023 - 2023</h5>
                    </div>      
                </div>
              </div>
          
              <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                          <img src="imagenes/de pc.png" alt="DePc" class="img-fluid baw" title="De Pc Suite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                          <h3>Desarrollador Web</h3>
                          <h4>Desarrollador Web Full Stack</h4>
                          <h5>HTML & CSS</h5>
                          <h5>Git & Terminal</h5>
                          <h5>PHP</h5>
                          <h5>Laravel</h5>
                          <h5>Javascript</h5>

                        </div>
                    </div>
              </div>

        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Intermediate B2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
        <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>Hobbie</h2>
                                <ul>
                                    <li>Videojuegos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                
    </div>
                
</main>
<footer class="container mt-auto">
        <div class="row mt-5 mb-3">
            <div class="col-sm-4 col-12">
                <a href="https://github.com"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-4 col-12">
               Sponsor <a href="https://depcsuite.com">DePc Suite</a>
            </div>
            <div class="col-sm-4 col-12">
               <a href="mailto:info@jeremyowt.com.ar">info@jeremyowt.com.ar</a>
            </div>
        
        </div>
    </footer>
    <div class="whatsapp px-3 pt-2 pb-3"><a href="https://"><i class="fa-brands fa-whatsapp"></i></a></div>
</body>
</html>
</body>

</html>

</body>
