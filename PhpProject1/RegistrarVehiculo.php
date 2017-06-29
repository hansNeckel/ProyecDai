<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="controlador/upload.php" method="post" enctype="multipart/form-data">
            <div><input type="file" name="archivo" id="archivo"></div>
            <div><label>Nombre</label><input type="text" name="nombre" id="nombre"></div>
            <input type="submit" value="Subir Archivo">
        </form>
    </body>
</html>