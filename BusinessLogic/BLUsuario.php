<?php

$cProcedimiento = $_POST["procedimiento"];
$aDatos = array();

$objBLUsuario = new DAUsuario();


switch ($cProcedimiento)
{
    case 'autenticar':
        $aDatos = array(
            'cUsuario' => $_POST['cUsuario'],
            'cPassword' => $_POST['cPassword']
        );
        
        $objBLUsuario->Autenticar($aDatos);
        break;
    default :
        break;
}

