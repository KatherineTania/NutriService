<?php
include $_SERVER['DOCUMENT_ROOT'].'/NutriService/Common/Library/tcpdf/tcpdf.php';
class HReportes
{
    protected $pdf;
    protected $section;
    protected $borders;
    protected $textAlign;
    protected $pageWidth;


    public function __construct() 
    {
        $this->pdf=new TCPDF('L','pt');
        $this->pdf->SetMargins(60, 80, 60);
    }
   
    public function addHeader()
    {
        $title='NUTRISERVICE (V 1.0) - 2017';
        $stitle='Aplicativo de Gestion';
        $ln='';
        
        $this->pdf->setHeaderData($ln, 40,$title,$stitle);
        $this->pdf->setHeaderFont(array('helvetica','',10));
        $this->pdf->SetHeaderMargin(10);
    }
    public function addFooter()
    {
        $this->pdf->setFooterData(array(0,64,0), array(0,64,128));
        $this->pdf->setFooterFont(array('helvetica','',8));
        $this->pdf->SetAutoPageBreak(TRUE, 25);
        $this->pdf->SetFooterMargin(15);
    }
    public function addSection()
    {
        $this->pdf->AddPage();
    }
    
    public function addLine()
    {
        $this->pdf->Ln();
    }

    public function addText($text,$style=null,$pStyle=null)
    {       
        $this->setParagraphStyle($pStyle['align']);        
        $this->setTextStyle($style);
        
        $this->pdf->Write(0, $text, '', 0, $this->textAlign, true, 0, false, false, 0);
    }
    public function addImage($source=null,$imageStyle=null)
    {
        if(is_string($source))
        {
            $this->pdf->Image($source, $this->pdf->GetX(), $this->pdf->GetY(),
                $imageStyle['width'],$imageStyle['heigth'], 'JPG', '', 
                '', true, 150, '', false, false, 1, false, false, false);
        }
    }
    public function addTable($data,$tableStyle=null,$colWidth=null,$fRowStyle=null,$cellStyle=null)
    {
        $index=array_keys($data[0]);
        $len=count($index);
        
        $this->setParagraphStyle($cellStyle['align']);
        $this->setTableStyle($tableStyle);
        
        $width=  ($this->pdf->getPageWidth())/($len+1);
        $this->pdf->SetFillColor(220, 255, 220);

        for($i=0;$i<$len;$i++)
        //{$this->pdf->Cell($width, 0, $index[$i], $this->borders,0, $this->textAlign, false,'',0,false,'','T');}
        {
            
            if(count($colWidth)>0)
            {
                $width = $colWidth[$i];
            }
            $this->pdf->MultiCell($width, 25, $index[$i], $this->borders, $this->textAlign, 1, 0, '', '', true);            
            //$this->pdf->Cell($width, 0, $index[$i], $this->borders,0, $this->textAlign, false,'',0,false,'','T');
            
        }
        $this->pdf->Ln();
        
        foreach($data as $dt)
        {
            $i=0;
            foreach($dt as $d)
            {
                if(count($colWidth)>0)
                {
                    $width = $colWidth[$i];
                }
                $this->pdf->Cell($width, 0, $d, $this->borders,0, $this->textAlign, false,'',0,false,'','T');                
                
                $i++;
            }
            $this->pdf->Ln();
        }
    }
    
    public function setTextStyle($style)
    {
        $St='';
        if($style['bold']){$St=$St.'B';}
        if($style['italic']){$St=$St.'I';}        
        if($style['underline']!='none'){$St=$St.'U';}
        
        $this->pdf->SetFont($style['name'], $St, $style['size']);
    }
    
    public function setParagraphStyle($align)
    {
        switch ($align)
        {
            case 'left':$this->textAlign='L';break;
            case 'right':$this->textAlign='R';break;
            case 'center':$this->textAlign='C';break;
            default : $this->textAlign='L';break;
        }
    }
    
    public function setTableStyle($tableStyle)
    {
        if($tableStyle['borderSize']>0)
        {
            $this->borders=array(
                'LTRB'=>array('width'=>$tableStyle['borderSize']/2,'color'=>array(0,0,0))
            );
        }        
    }

    public function saveDocument($name)
    {
        $this->pdf->Output($name.'pdf');
    }
}

