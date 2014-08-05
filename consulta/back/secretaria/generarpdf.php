<?php
header('Content-Type: text/html; charset=UTF-8');
 
require('libFPDF/fpdf.php');
 
class PDF extends FPDF
{
	function Footer() 
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        
        $this->Cell(0,10,'Centro Médico y Dental Hnos. Fuster, Paciente: '.$_GET['n'].' '.$_GET['a'].'','T',0,'C');
    }
	
	function Header() 
    {
        $this->SetFont('Arial','B',9);
        $this->Line(10,10,206,10);
        $this->Line(10,35.5,206,35.5);
        $this->Cell(30,25,'',0,0,'C',$this->Image('head.png', 0,12, 650));
        $this->Ln(25);
    }
	
	function ImprimirTexto()
    {
        $txt = "Reporte informativo sobre el paciente ".$_GET['n']." ".$_GET['a'].".
				
			Nombre: ".$_GET['n']." ".$_GET['a']."
			RUT: ".$_GET['r']."
			Sexo: ".$_GET['s']."                                                          Edad: ".$_GET['e']."
			Direccion: ".$_GET['d']."                              Telefono: ".$_GET['t']."
			
			Doctor Asignado: ".$_GET['dc']."                                 Seguro Medico: ".$_GET['sg']."
			Motivo de la Consulta:
			".$_GET['c']."
			
			Diagnostico: 
			".$_GET['dg']."
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			                                                                      ___________________________________
																			                                                                  Firma doctor asignado: ".$_GET['dc']."";

        $this->MultiCell(0,5,$txt);
 
    }
	
	
}
		$fecha="Linares, Chile";
 
        $pdf = new PDF();             
        $pdf->AddPage('P', 'Letter'); 
		
		$pdf->SetFont('Arial','B',12); 
        $pdf->Cell(0,10,$fecha,0,1,'R');
		
		$pdf->Ln();
        $pdf->ImprimirTexto();
		
        $pdf->Output();               
 
?>