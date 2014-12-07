<?php
require('inc/conexion.php');
$consulta="SELECT * from cliente";
$resultado=$mysqli->query($consulta);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Papajam</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">	  
   </head>
   
   <body>
    <header>
     <div class="container">
       <div class="row">
          <div class="col-sm-3">
            <img src="img/logo.png" class="img-rounded img-responsive" />
          </div>
           <div class="col-sm-6 titu">
                <h3>CAFE PIZZA PAPA JAM</h3>
                <h4>"SIEMPRE ALGO NUEVO QUE COMPARTIR"</h4> 
           </div>
       </div>
     </div>
  </header>

    <nav class="Menu">
      <ul class="nav nav-tabs nav-justified" role="tablist">
        <li role="presentacion" class="active"><a href="index.php">INCIO</a></li>
        <li role="presentacion" class="active"><a href="Tiposdepizza.php">CARTA</a></li>
        <li role="presentacion" class="active"><a href="#">HISTORIAL DE PEDIDO</a></li>
        <li role="presentacion" class="active"><a href="#">PROMOCIONES</a></li>
        <li role="presentacion" class="active"><a href="#">GALERIA</a></li>
        <li role="presentacion" class="active"><a href="#">CONTACTANOS</a></li>
      </ul>
    </nav>

    <section>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 form well">
              <article class="Q">
                <h1>QUIENES SOMOS</h1>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
              </article>
           </div>
        </div>
      </div>
    </section>

    <div class="modal fade"id="modal-usuario" >
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
        </div>
        <div class="modal-body">
          <form action="login.php" href="login.php" method="POST">
            <div class="input-group">
              <div class="input-group-addon">Usuario</div>
              <input class="form-control" name="usuario" />
            </div>
            <br>

            <div class="input-group">
              <div class="input-group-addon">Contraseña</div>
              <input class="form-control" type="password" name="pass" />
            </div>
            <br>
            <button type="submit"  class="btn btn-primary">Ingresar</button>
            
          </form>
        </div>
      </div>
        
      </div>
    </div>

    <footer>
    <div class="container">
       <div class="row">
           <div class="col-sm-12 titu">
            <div class="centrar">
              <a class="btn btn-primary">INICIO</a>
              <a class="btn btn-primary">CARTA</a>
              <a class="btn btn-primary">FACEBOOK</a>
              <a class="btn btn-primary">PROMOCIONES</a>
              <a class="btn btn-primary">CONTACTANOS</a>
              <a class="btn btn-primary" href="#modal-usuario" data-toggle="modal">ADMIN</a>
            </div>
             <h3>© 2014 CAFÉ PAPA JAM PIZZA</h3>
            </div>
         </div>
        </div>
     </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script> 	
    
  </body>
</html>

