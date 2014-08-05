<?php
	header('Content-Type: text/html; charset=UTF-8');
	
	include 'connectionAdmin.php';
	
	$query = "SELECT * FROM doctor";
	$result = mysqli_query($link,$query);
 
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
	
	function TablaBasica($header,$result)
	{
		foreach($header as $col)
		$this->Cell(40,7,$col,1);
		$this->Ln();
		while($rowp = mysqli_fetch_array($result)){
			$this->Cell(40,5,$rowp['rut_doctor'],1);
			$this->Cell(40,5,$rowp['nombre_doctor'],1);
			$this->Cell(40,5,$rowp['apellido_doctor'],1);
			$this->Cell(40,5,$rowp['direccion'],1);
			$this->Cell(40,5,$rowp['telefono'],1);
			$this->Ln();
		}
	}
	
	function ImprimirTexto()
    {
        $txt = "Reporte informativo sobre los doctores que ejercen actualmente en la consulta";
        $this->SetFont('Arial','',12);
        $this->MultiCell(0,5,$txt);
 
    }
	
	
}
		$fecha="Linares, Chile";
 
        $pdf = new PDF();             
        $pdf->AddPage('P', 'Letter'); 
		$header=array('Rut','Nombre','Apellido','Direccion','Telefono');
		
		
		 $pdf->SetFont('Arial','B',12); 
        $pdf->Cell(0,10,$fecha,0,1,'R');
		
		$pdf->Ln();
        $pdf->ImprimirTexto();
		$pdf->Ln();
		$pdf->TablaBasica($header,$result);
		
        $pdf->Output();              
?>