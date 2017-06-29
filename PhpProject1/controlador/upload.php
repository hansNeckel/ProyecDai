<?php
$URI=$_SERVER['DOCUMENT_ROOT'].'/Prueba3/files/';
/*
El nombre $_FILES['archivo'] correponde al identificador del input tipo "file del formulario"
 *  */
$URI_DEST=$URI.$_FILES['archivo']['name'];
/*Se mueve el archivo desde la ubicación predeterminada*/
/*
$URI_DEST, este dato debe ser almacenado en la Base de datos
 */      
move_uploaded_file($_FILES['archivo']['tmp_name'],$URI_DEST);