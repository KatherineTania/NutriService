<?php
include $_SERVER['DOCUMENT_ROOT'].'/NutriService/Common/Helper/HReportes.php';
include $_SERVER['DOCUMENT_ROOT'].'/NutriService/Common/Helper/HConexionMySQL.php';
class DAReportes extends HReportes
{
    private $objHConexionMySQL;
    private $fontStyle;
    private $paragraphStyle;
    private $tableStyle;
    private $fRowStyle;
    
    function __construct() {
        parent::__construct();
        
        $this->objHConexionMySQL = new HConexionMySQL();        
        
        $this->fontStyle['name']='times';
        $this->fontStyle['size']=9;
        $this->fontStyle['bold']=false;
        $this->fontStyle['italic']=false;
        $this->fontStyle['underline']='none';
        
        $this->paragraphStyle['align']='center';
        
        $this->tableStyle['borderSize']=1;
        $this->tableStyle['bgColor']='Red';
        
        $this->fRowStyle['borderSize'] = 1;
        $this->fRowStyle['bgColor']='Red';
        
        
    }
    
    public function EvaluacionNutricional()
    {
        $data = $this->objHConexionMySQL->EjecutarSP("RPT_EvaluacionNutricional_SP");
        //var_dump($data);
        $colWidth = array(120,35,35,35,35,45,45,45,45,45,45,45,45,45,45);
        
        $this->addHeader();
        $this->addSection();
        $this->setTextStyle($this->fontStyle);
        $this->addText("Reporte de Evaluación Nutricional", $this->fontStyle, $this->paragraphStyle);        
        
        $this->addTable($data, $this->tableStyle,$colWidth);
        $this->addFooter();
        
        $this->saveDocument("Evaluacion Nutricional");
    }
}

