<?php
include '../Common/Helper/HConexionMySQL.php';
class DAAdministracion
{
    private $objHConexionMySQL;
    
    public function __construct() {
        $this->objHConexionMySQL = new HConexionMySQL();
    }
    
    public function PersonaGrabar($oDatos)
    {
        $this->objHConexionMySQL->EjecutarSP("ADM_PersonaGrabar_SP",$oDatos);
    }
    public function PersonalGrabar($oDatos)
    {
        $this->objHConexionMySQL->EjecutarSP("ADM_PersonalGrabar_SP",$oDatos);
    }
    public function UsuarioGrabar($oDatos)
    {
        $this->objHConexionMySQL->EjecutarSP("ADM_UsuarioGrabar_SP",$oDatos);
    }
    
    public function GrabarEstadoNutricional($oDatos)
    {
        $this->objHConexionMySQL->EjecutarSP("SRV_GrabarEstadoNutricional_SP",$oDatos);
    }
}


