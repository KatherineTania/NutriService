<?php

class DAUsuario
{
    private $objHConexionMySQL;
    function __construct() {
        $this->objHConexionMySQL = new HConexionMySQL();
    }
    
    function Autenticar($aDatos)
    {
        $this->objHConexionMySQL->EjecutarSP("SIS_Autenticar_SP", $aDatos);
    }
    
    function Autorizar($aDatos)
    {
        $this->objHConexionMySQL->EjecutarSP("SIS_Autorizar_SP",$aDatos);
    }
    
    
}

