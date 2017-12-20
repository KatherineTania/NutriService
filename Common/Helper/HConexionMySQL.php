<?php
//include '../Common/Entity/Sistema.php';
//include '../Common/Entity/TipoDato.php';
//include 'Common/Entity/Sistema.php';
//include 'Common/Entity/TipoDato.php';

include $_SERVER['DOCUMENT_ROOT'].'/NutriService/Common/Entity/Sistema.php';
include $_SERVER['DOCUMENT_ROOT'].'/NutriService/Common/Entity/TipoDato.php';

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
    public function EjecutarSP($cNombreSP,$oParams=array())
    {
        
        $dtResultado = array();
        $aListaParametros = $this->ListarParametros($cNombreSP);
        //var_dump($aListaParametros);
        
        if(count($aListaParametros) != count($oParams))
        {
            echo 'El procedimiento '.$cNombreSP.' tiene una cantidad diferente de parmatros al enviado';
            return;
        }
        
        
        //$cQuery = "CALL ".$cNombreSP." (".implode(",", $oParams).")";
        $cQuery = "CALL ".$cNombreSP." (";
        
        for($i =0 ; $i<count($aListaParametros); $i++)
        {
            //echo 'data_type: '.$aListaParametros[$i]['DATA_TYPE'].'<br/>';
            //echo 'convertible: '.TipoDato::$lCadena[$aListaParametros[$i]['DATA_TYPE']].'<br/>';
            
            if(TipoDato::$lCadena[$aListaParametros[$i]['DATA_TYPE']])
            {                        
                $cQuery = $cQuery."'".$oParams[$i]."',";
            }
            else
            {
                if(!is_numeric($oParams[$i]))
                {
                    echo 'se esperaba que el parametro del indice ( '.$i.' ) fuera numerico';
                    return;
                }                
                $cQuery = $cQuery.$oParams[$i].",";
            }
        }
        
        $cQuery = substr($cQuery, 0, strlen($cQuery)-1);
        if(count($aListaParametros)==0)
        {
            $cQuery = $cQuery."(";
        }
        $cQuery = $cQuery.")";
        
        //echo 'query: '.$cQuery;
        
        $this->Conectar();
        
        if (!$this->objConexion->multi_query($cQuery)) {
            echo "Falló CALL: (" . $this->objConexion->errno . ") " . $this->objConexion->error;
        }
        
        if ($oData = $this->objConexion->store_result()) {
            $i=0;            
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
    
    function ListarParametros($cNombreSP)
    {
        $this->Conectar();
        
        //$cQuery = "CALL ".$cNombreSP." (".implode(",", $oParams).")";
        $cQuery = "CALL SIS_ListarParametros_SP('".$cNombreSP."')";
        
              
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