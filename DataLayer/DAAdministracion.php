<?php
include '../Common/Helper/HConexionMySQL.php';
class DAAdministracion
{
    private $objHConexionMySQL;
    
    function __construct() {
        $this->objHConexionMySQL = new HConexionMySQL();
    }
    
    function GrabarPersona($oDatos)
    {
        $this->objHConexionMySQL->EjecutarSP("ADM_PersonaGrabar_SP",$oDatos);
    }
}


