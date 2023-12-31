<?php
$pagina = "inicio" ?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/">
    <link rel="stylesheet" href="css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="estiloss.css">
</head>
<body id="Inicio" class="d-flex flex-column h-100">
   
    <header class="container">
        <?php include_once "menu.php" ?>
    </header>
    
    <main class="container">
        
        <div class="row">
            <div class="col-12 cohete">
                <a href="proyectos.html"><img src="imagenes/cohete.svg" alt=""></a>
                
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 text-center mt-5 offset-sm-3">
                <p class="py-2">Bienvenid@ a mi sitio web</p>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn btn-blanco">Conoce mis proyectos</a>
        </div>
        
        
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