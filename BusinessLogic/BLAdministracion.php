<?php

include $_SERVER['DOCUMENT_ROOT'].'/NutriService/DataLayer/DAAdministracion.php';

$cProcedimiento = $_POST['procedimiento'];
$oDAAdministracion = new DAAdministracion();

switch ($cProcedimiento)
{
    case 'GrabarUsuario':
        $oDatos = array(
            ''.$_POST['cNombres'],
            ''.$_POST['cUsuario'],
            ''.$_POST['cPassword'],
            ''.$_POST['cRepassword']            
        );
        $oDAAdministracion->UsuarioUsuario($oDatos);
        break;
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
        $oDAAdministracion->GrabarPersona($oDatos);
        break;
        
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
         
         $oDAAdministracion->GrabarPersonal($oDatos);
         break;
        
         case 'GrabarPaciente':
        $oDatos = array(
            ''.$_POST['idcama'],
            ''.$_POST['idDieta'],
            ''.$_POST['idHistoriaClinica'],
            ''.$_POST['idmadre'],
            ''.$_POST['idPaciente'],
            ''.$_POST['idPadre'],
            ''.$_POST['idPersona'],
            //$_POST['idSexo'],
            1,
        
        );
         
         $oDAAdministracion->GrabarPaciente($oDatos);
         break;
     
        case 'GrabarIndicadorNutricionL':
        $oDatos = array(
            ''.$_POST['IdGrabarIndicadorNutricionl'],
            ''.$_POST['nCircunferenciaBraquial'],
            ''.$_POST['nCircunfererenciaCintura'],
            ''.$_POST['nCircunferenciaMuñeca'],
            ''.$_POST['nPeso'],
            ''.$_POST['nPliegueBicipital'],       
            ''.$_POST['nPliegueBicipital'],
          
            
            
            ''.$_POST['nPliegueSuprailiaco'],
            ''.$_POST['nPliegueTricipital]'],
                 //$_POST['idSexo'],
              1
            );
            
            $oDAAdministracion->GrabarIndicadorNutricional($oDatos);
            break;
 
        
}
