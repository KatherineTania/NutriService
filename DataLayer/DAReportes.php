<?php
include $_SERVER['DOCUMENT_ROOT'].'/NutriService/Common/Helper/HReportes.php';
class DAReportes extends HReportes
{
    private $objHConexionMySQL;
    private $fontStyle;
    private $paragraphStyle;
    private $tableStyle;
    
    function __construct() {
        parent::__construct();
        
        $this->fontStyle['name']='courier';
        $this->fontStyle['size']=12;
        $this->fontStyle['bold']=true;
        $this->fontStyle['italic']=true;
        $this->fontStyle['underline']='none';
        
        $this->paragraphStyle['align']='center';
    }
    
    public function EvaluacionNutricional()
    {
        $this->addHeader();
        $this->addSection();
        $this->addText("hola mundo", $this->fontStyle, $this->paragraphStyle);
        $this->addFooter();
        
        $this->saveDocument("hola");
    }
}

