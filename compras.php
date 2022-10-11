<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Escuela de Rock</title>
        <link rel="stylesheet" type="text/css" href="css/registro.css">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Cursos de Instrumentos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="compras.php">Revisa Tus Compras</a></li>
                        <li class="nav-item"><a class="nav-link" href="registro.html">Registrarme</a></li>
                    </ul>
                </div>
            </div>
        </nav>
     
    
        <!-- Content section 1-->
        <section id="scroll">
            <div class="col-md-6 col-sm-6 create-new-account">
                <br><br><br><br><br>
                <h1 align="center">Compras</h1> <br><br>

	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="60%">
  <thead>
    <tr>
    
      <th>Nombre y Apellido</th>
      <th>Email</th>
      <th>Fono</th>
      <th>Cursos Comprados</th>
    

    </tr>
  </thead>
  <tbody>

      <?php 

            include 'controller/showCliente.php';

      ?>
                
            </div>
        </section>
        
        <!-- Footer-->
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
    </body>
</html>
