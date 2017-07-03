<html>  
    <head>
    <title> Taxis de Lujo </title>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
 
     
  <div class="principal" align="center">
      
    
  <!-- Menú Public Page-->
    <div class="menu1">
 
        <center>
            
            TAXIS DE LUJO
            <br>
            <a href="index.php" >Inicio</a>
    
            <a href="Servicios.php">Servicios</a>
    
            <a href="Registro.php" ></i>Registro</a> 
    
            <a href="Contacto.php">Contacto</a>
    
            <a href="Ayuda.php">Ayuda</a>

            <a href="Login.php" ></i>Iniciar Sesión</a>
        </center>
    </div>
 
    <div class="contenido">    
      <?php
include '../lib/Conexion.php';

$tipoSer=$_POST["tipo_servicio"];
$direcini=$_POST["direccion_inicio"];
$direcdes=$_POST["direccion_destino"];

$sql= "INSERT INTO Servicio(tipo_servicio, direccion_inicio, direccion_destino) values('".$tipoSer."','".$direcini."','".$direcdes."')";
//Ejecucion de la sentencia SQL
   $resultado=mysqli_query($con,$sql);
	mysqli_close($con);
	echo ("El servicio fue realizado con exito");
        echo "<br>";
        
 
?>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <a href="../index.php" >Volver al inicio</a>
    </div>
   
  </div>
  
  </body>
</html>
