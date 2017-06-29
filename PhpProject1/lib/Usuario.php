<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario {

    
    var $idusuario;
    var $nombre;
    var $correo;
    var $clave;
    var $NomEmpresa;
    var $RutEmpresa
            
    function __construct($nombre = "", $correo = "", $clave = "", $NomEmpresa = "", $RutEmpresa = "")
            {
        
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->NomEmpresa = $NomEmpresa;
        $this->RutEmpresa = $RutEmpresa;
        
    
    }
    //Valida la existencia de un usuario
    function VerificaUsuario() {
        $oConn = new Conexion();
        if ($oConn->Conectar()) {
            $db = $oConn->objconn;
        } else {
            return false;
        }
        $sql = "SELECT * FROM Usuario WHERE nombre='$this->nombre'";
        $resultado = $db->query($sql);
        if ($resultado->num_rows >= 1) {
            return true;
        } else {
            return false;
        }
    }
    function VerificaUsuarioClave() {
        $oConn = new Conexion();
        if ($oConn->Conectar()) {
            $db = $oConn->objconn;
        } else {
            return false;
        }
        $passmd5 = md5($this->pass);
        $sql = "SELECT * FROM Usuario WHERE nombre='$this->nombre' and clave='$passmd5'";
        $resultado = $db->query($sql);
        if ($resultado->num_rows >= 1) {
            return true;
        } else {
            return false;
        }
    }
    }
}