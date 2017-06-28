<?php

include '../lib/Conexion.php';

$sql="SELECT * FROM usuario WHERE nombre='".$usuario."' AND clave='".$pass."'";
$resultado=mysqli_query($con,$sql);

if (($resultado->num_rows)>= 1):
	session_start();
	$_SESSION['nombre'] = $usuario;
	header("Location: ../LoginCorrecto.php");

endif 
 
?>