<?php
    include 'Common/Helper/HConexionMySQL.php';
    $objEjecutar = new HConexionMySQL();
    
    $dsData = $objEjecutar->EjecutarSP("SIS_Test_SP",array(2,8));
    //var_dump($dsData);
    
    for($i = 0;$i<  count($dsData);$i++)
    {
        echo $dsData[$i]["idTest"]." - ".$dsData[$i]["cTest"]."</br>";
    }
?>

