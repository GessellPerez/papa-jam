<!DOCTYPE html>
<html>
<head>
	<title>Papajam</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
</head>
<body>
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
    <section class="sec1">
     <div class="container well">
       <div class="row">
         <div class="col-sm-4 well ">
              <img class="img-responsive" src="">
         </div>
         <div class="col-sm-6 well ">
              <h1>Descripcion</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
         <div class="col-sm-2 well ">
              <a class="btn btn-primary" href="#modal_cliente" data-toggle="modal">Comprar</a>
         </div> 
       </div>
     </div>

     <div class="container well">
       <div class="row">
         <div class="col-sm-4 well ">
              <img class="img-responsive" src="">
         </div>
         <div class="col-sm-6 well ">
              <h1>Descripcion</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
         <div class="col-sm-2 well ">
              <button class="btn btn-default">Comprar</button>
         </div> 
       </div>
     </div>
      


        
        
        </div>
      </div>
    </section>
    <div class="modal fade" id="modal_cliente">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
          </div>
          <div class="modal-body">
            <form role="Formulario" action="" method="POST" nombre="nuevocliente">
              <h1><a data-toggle="modal" href=""></a>Realizar Pedido</h1>
              <label for="nombre">Nombre</label>
              <input for="Nombre" class="form-control" name="nombre" placeholder="Ingresar Nombre" required="">        
              <label for="apellido">Apellido</label>
              <input for="Apellido" class="form-control" name="apellido" placeholder="Ingresar Apellido" >
              <label for="telefono">Telefono</label>
              <input for="Telefono" class="form-control" name="telefono" placeholder="Ingresar Telefono" >
              <label for="email">Email</label>            
              <input for="Email" class="form-control" name="email" placeholder="Ingresar Email">
              <button type="submit" style="margin-top: 20px;"class="btn btn-default" name="btn" id="btn"><a href="susc.php"></a>Enviar</button>
              </form>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script> 
  </body>
</html>



<?php 

require('inc/conexion.php');



if (isset($_POST['btn'])) {

  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $telefono=$_POST['telefono'];
  $email=$_POST['email'];
  $sql="INSERT INTO cliente (nombre,apellido,telefono,email) VALUES ('$nombre','$apellido','$telefono','$email')";
  $resultado=$mysqli->query($sql);
  
  echo "<script language='javascript' type='text/javascript'>
   alert('Se han registrado los datos');
  </script>";
 
  }


 ?>