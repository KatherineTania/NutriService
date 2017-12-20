<?php

include $_SERVER['DOCUMENT_ROOT'].'/NutriService/DataLayer/DAAdministracion.php';

$cProcedimiento = $_POST['procedimiento'];
$oDAAdministracion = new DAAdministracion();
$oResultado = array();

switch ($cProcedimiento)
{
    case 'GrabarUsuario':
        $oDatos = array(
            
            $_POST['cUsuario'],
            $_POST['cPassword'],
            $_POST['idPersona']
            //$_POST['cRePassword']            
        );
        $oResultado = $oDAAdministracion->GrabarUsuario($oDatos);
        //echo $oResultado[0]['cMensaje'];
        break;
    case 'GrabarPersona':
        $oDatos = array(
            $_POST['cNombres'],
            $_POST['cPaterno'],
            $_POST['cMaterno'],
            $_POST['cDocumento'],
            $_POST['dFechaNacimiento'],
            $_POST['cDireccion'],
            $_POST['idSexo'],
            $_POST['cTelefono'],
            $_POST['cEmail'],
            $_POST['cOcupacion']
        );
        $oResultado = $oDAAdministracion->GrabarPersona($oDatos);
        //echo $oResultado[0]['cMensaje'];
        break;
        
        case 'GrabarPersonal':
        $oDatos = array(
            $_POST['idPersona'],
            $_POST['idCargo'],
            $_POST['idProfesion'],
            $_POST['idGradoAcademico'],
            $_POST['idServicio'],
            $_POST['dFechaIngreso'],
            1
        );
         
         $oResultado = $oDAAdministracion->GrabarPersonal($oDatos);
         //echo $oResultado[0]['cMensaje'];
         break;
        
         case 'GrabarPaciente':
        $oDatos = array(
            $_POST['idCama'],
            $_POST['idDieta'],
            $_POST['idHistoriaClinica'],
            $_POST['idPersona'],
            $_POST['idPadre'],
            $_POST['idMadre']
        );
         
         $oResultado = $oDAAdministracion->GrabarPaciente($oDatos);
         //echo $oResultado[0]['cMensaje'];
         break;
     
        case 'GrabarIndicadorNutricional':
        $oDatos = array(
            $_POST['idPaciente'],
            $_POST['nCircunferenciaMuneca'],
            $_POST['nCircunferenciaBraquial'],
            $_POST['nPliegueTricipital'],
            $_POST['nCircunferenciaCintura'],
            $_POST['nPliegueBicipital'],
            $_POST['nPliegueSubescapular'],
            $_POST['nPliegueSuprailiaco'],
            $_POST['nPeso'],
            $_POST['nTalla']
        );
            
        $oResultado = $oDAAdministracion->GrabarIndicadorNutricional($oDatos);
        //echo $oResultado[0]['cMensaje'];
        break;
 
        
}

if(isset($oResultado[0]['cMensaje']))
{
    header("Location: http://localhost/NutriService/main.php?cMensaje=".$oResultado[0]['cMensaje']);
    exit;
}
