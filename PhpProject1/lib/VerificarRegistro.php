<?php
include '../lib/conexion.php';
$name=$_POST["nombre"];
$password=$_POST["clave"];
    
$sql= "INSERT INTO usuario(nombre, clave) values('".$name."','".$password."')";
//Ejecucion de la sentencia SQL
   $resultado=mysqli_query($con,$sql);
	mysqli_close($con);
	echo ("El usuario ah sido registrado con exito");
        echo "<br>";
        
 
?>
<a href="../index.php" >Volver al Inicio</a>
