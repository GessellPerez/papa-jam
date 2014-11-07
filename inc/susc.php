<?php
require ('conexion.php');
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	$consulta="INSERT INTO cliente(nombre,apellido,telefono,email) VALUES ('$nombre','$apellido','$telefono','email')";
	$resultado=$mysqli->query($consulta);

	header("Location:../index.php");
	exit()

	?>