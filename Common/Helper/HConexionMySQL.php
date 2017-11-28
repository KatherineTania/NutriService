<?php
include 'Common/Entity/Sistema.php';

class HConexionMySQL
{
    private $objSistema;
    private $objConexion;
    
    function __construct()
    {
        $this->objSistema = new Sistema();
    }
    public function Conectar()
    {
        try
        {
            $this->objConexion = new mysqli(
                    $this->objSistema->cServidor,
                    $this->objSistema->cUsuario,
                    $this->objSistema->cPassword,
                    $this->objSistema->cBaseDatos);
        } catch (Exception $ex)
        {
            echo $ex;
        }
    }    
    public function EjecutarQry($cQuery)
    {
        $this->Conectar();
        
        if (!$this->objConexion->multi_query($cQuery)) {
            echo "Falló CALL: (" . $this->objConexion->errno . ") " . $this->objConexion->error;
        }
        
        if ($oData = $this->objConexion->store_result()) {
            $i=0;
            $dtResultado = array();
            while ($row = $oData->fetch_assoc()){
                foreach ($row as $key => $value) {
                    $dtResultado[$i][$key] = $value;
                }
                $i++;
            }
        } else {
            if ($this->objConexion->errno) {
                echo "Store failed: (" . $this->objConexion->errno . ") " . $this->objConexion->error;
            }
        }
        return ($dtResultado);
    }
}