<?php
    include 'Common/Helper/HConexionMySQL.php';
    $objEjecutar = new HConexionMySQL();
    
    $dsData = $objEjecutar->EjecutarQry("select * from test");
    //var_dump($dsData);
    
    for($i = 0;$i<5;$i++)
    {
        echo $dsData[$i]["idTest"]." - ".$dsData[$i]["cTest"]."</br>";
    }
?>

