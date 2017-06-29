<html>
<head><title>Registro</title></head>
    <body>
	
            <h2>Formulario Registro</h2>
            <div
                
            
                <form method="POST" action="../lib/VerificarRegistro.php">
                        Nombre
                        <div><input required type="text" name="nombre" placeholder="Usuario" /></div>
                        Correo
                        <div><input required type="text" name="correo" placeholder="Correo" /></div>
                        Contraseña
                        <div><input required type="password" name="clave" placeholder="Contraseña" /></div>
                        Nombre Empresa
                        <div><input required type="text" name="NomEmpresa" placeholder="Nom Empresa" /></div>
                        Rut Empresa
                        <div><input required type="text" name="RutEmpresa" placeholder="Rut Empresa" /></div>
                      
			<input type="submit" value="Registrarse"></input>
		</form>
       
		<form method="POST" action="index.php">
			<button type="submit">Volver</button>
		</form>
			
    </body>
</html>