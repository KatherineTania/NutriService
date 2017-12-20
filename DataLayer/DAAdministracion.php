<?php
include $_SERVER['DOCUMENT_ROOT'].'/NutriService/Common/Helper/HConexionMySQL.php';
class DAAdministracion
{
    private $objHConexionMySQL;
    
    public function __construct() {
        $this->objHConexionMySQL = new HConexionMySQL();
    }
    
    public function PersonaGrabar($oDatos)
    {
        return $this->objHConexionMySQL->EjecutarSP("ADM_PersonaGrabar_SP",$oDatos);
    }
    
    function GrabarPersonal($oDatos)
    {
        return $this->objHConexionMySQL->EjecutarSP("ADM_PersonalGrabar_SP",$oDatos);
    }
    
    function GrabarUsuario($oDatos)
    {
        return $this->objHConexionMySQL->EjecutarSP("USR_UsuarioGrabar_SP",$oDatos);
    }
    
    function GrabarPaciente($oDatos)
    {
        return $this->objHConexionMySQL->EjecutarSP("SRV_PacienteGrabar_SP",$oDatos);
    }
    
    function GrabarIndicadorNutricional($oDatos)
    {
        return $this->objHConexionMySQL->EjecutarSP("SRV_IndicadorNutricionalGrabar_SP",$oDatos);
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


