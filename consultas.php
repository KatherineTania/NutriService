<?php
    include 'Common/Helper/HConexionMySQL.php';
    $objEjecutar = new HConexionMySQL();
    
    $dsData = $objEjecutar->EjecutarSP("USR_UsuarioGrabar_SP",array(12345567,7474747,1));
    //var_dump($dsData);
    
    for($i = 0;$i<  count($dsData);$i++)
    {
        echo $dsData[$i]["idTest"]." - ".$dsData[$i]["cTest"]."</br>";
    }
    
    /*$dsData = $objEjecutar->ListarParametros("SRV_IndicadorNutricionalGrabar_SP");
    
    for($i =0; $i < count($dsData); $i++)
    {
        echo $dsData[$i]["PARAMETER_NAME"]." - ".$dsData[$i]["DATA_TYPE"]." - ".$dsData[$i]["ORDINAL_POSITION"]."<br/>";
    }*/
    
?>

