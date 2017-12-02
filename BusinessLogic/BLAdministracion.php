<?php

include '../DataLayer/DAAdministracion.php';
$oDatos = array(
    ''.$_POST['cNombres'],
    ''.$_POST['cPaterno'],
    ''.$_POST['cMaterno'],
    ''.$_POST['cDocumento'],
    ''.$_POST['dFechaNacimiento'],
    ''.$_POST['cDireccion'],
    //$_POST['idSexo'],
    1,
    
    ''.$_POST['cTelefono'],
    ''.$_POST['cEmail'],
    ''.$_POST['cOcupacion']
);

$oDAAdministracion = new DAAdministracion();

$oDAAdministracion->GrabarPersona($oDatos);
//var_dump($oDatos);
