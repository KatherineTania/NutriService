<?php
    include 'Common/Helper/HConexionMySQL.php';
    $objEjecutar = new HConexionMySQL();
    
    $dsData = $objEjecutar->EjecutarSP("SIS_ListarParametros_SP",array('USR_UsuarioGrabar_SP'));
    //var_dump($dsData);
    
    for($i = 0;$i<  count($dsData);$i++)
    {
        echo $dsData[$i]["PARAMETER_NAME"]." - ".$dsData[$i]["DATA_TYPE"]."</br>";
    }
    
    /*$dsData = $objEjecutar->ListarParametros("SRV_IndicadorNutricionalGrabar_SP");
    
    for($i =0; $i < count($dsData); $i++)
    {
        echo $dsData[$i]["PARAMETER_NAME"]." - ".$dsData[$i]["DATA_TYPE"]." - ".$dsData[$i]["ORDINAL_POSITION"]."<br/>";
    }*/
    echo "".$_SERVER['DOCUMENT_ROOT'];
    
?>

