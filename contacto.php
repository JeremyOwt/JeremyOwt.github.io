<?php
$pagina = "contacto" ?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="estiloss.css">
</head>
<body id="contacto" class="d-flex flex-column h-100">
   
    <header class="container">
        <?php include_once "menu.php" ?>
    </header>
    
    <main class="container">
        <div class="row">
            <div class="col-12 py-4">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a conocer mi blog, especializado en muchas cosas que no se..</p>
            </div>
        <div class="col-12 col-sm-6">
            <form action="" method="post"></form>
                <div class="pb-4">
                    <input type="text" name="txtNombre" id="txtNombre" required class="form-control" placeholder="Nombre">
                </div>
                <div class="pb-4">
                    <input type="email" name="txtCorreo" id="txtCorreo" required class="form-control" placeholder="Correo">
                </div>
                <div class="pb-4">
                    <input type="tel" name="txtTelefono" id="txtTelefono" required class="form-control" placeholder="Telefono/Whatsapp">
                </div>
                <div class="pb-4">
                    <textarea name="txtMensaje" id="txtMensaje" class="form-control" placeholder="Escribe aqui tu mensaje"></textarea>
                </div>
                <div class="pb-4">
                    <button id="btnEnviar" name="btnEnviar" class="btn btn-blanco">Enviar</button>
                </div>
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