<?php
require ('inc/conexion.php');
?>

<?php
	if ($_POST) {

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	$sql="INSERT INTO cliente (nombre,apellido,telefono,email) VALUES ('$nombre','$apellido','$telefono','$email')";
	$resultado=$mysqli->query($sql);

	header("Location: Tiposdepizza.php");
	exit();
		
	}
?>