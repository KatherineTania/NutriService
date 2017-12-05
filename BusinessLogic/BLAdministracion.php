<?php

include '../DataLayer/DAAdministracion.php';

$cProcedimiento = $_POST['procedimiento'];

switch ($cProcedimiento)
{
    case 'GrabarUsuario':
        $oDatos = array(
            ''.$_POST['cNombres'],
            ''.$_POST['cUsuario'],
            ''.$_POST['cPassword'],
            ''.$_POST['cRepassword']            
        );
    case 'GrabarPersona':
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
        
        case 'GrabarPersonal':
        $oDatos = array(
            ''.$_POST['cNombres'],
            ''.$_POST['idCargo'],
            ''.$_POST['idProfesion'],
            ''.$_POST['idGradoAcademico'],
            ''.$_POST['idServicio'],
            ''.$_POST['idFechaIngreso'],
            //$_POST['idSexo'],
            1,
            
        );
        
        

}


$oDAAdministracion = new DAAdministracion();

$oDAAdministracion->GrabarPersona($oDatos);
//var_dump($oDatos);
