<?php 
require('inc/conexion.php');
$user=$_POST['usuario'];
$pss=$_POST['pass'];

echo $user."-".$pss;

$sql="SELECT * FROM administrador";
$resultado=$mysqli->query($sql);
	while ($fila=$resultado->fetch_assoc()) {
		$usua=$fila['user'];
		$p=$fila['pass'];
		if($usua==$user & $p==$pss){
			header("Location: administrador.php");
		}
		else
		{
			header("Location: index.php");
		}
	}
?>