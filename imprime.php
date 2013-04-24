<?php
include ("fpdf/fpdf.php");
include ('conexion.php');
$sql="SELECT * FROM tbl_funcionario WHERE id";
$result= mysql_query($sql);
while($row= mysql_fetch_array($result))
{ 
class PDF extends FPDF
{
function Header()
{
        // delimitando cuadrado
        // exterior
        $this->Cell(25,25);    
        $this->Cell(140,70,'',1,0);
        $this->ln(1);
        // interior
        $this->Cell(26,35);    
        $this->Cell(138,68,'',1,0); 
        $this->Ln(1);
         //Logo
	$this->Image('img/escudo.jpg',37,12,13);
        //salt de linea
        $this->Ln(1);
        // posciona la linea interna
        $this->Line(36,30,174,30);
}

//Pie de p�gina
function Footer()
{
	//Posici�n: a 1,5 cm del final
	$this->SetY(-35);
	//Arial italic 8
	$this->SetFont('Arial','I',8);
	//N�mero de p�gina
	$this->Cell(0,10,''.$this->PageNo().'/{nb}',0,0,'C');
}
}

//Creaci�n del objeto de la clase heredada
$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',7);
$pdf->Ln(1);
$pdf->Cell(45,30);    
$pdf->Cell(23,5,'Gobierno',0,0);
$pdf->Ln(3);
$pdf->Cell(45,70);    
$pdf->Cell(23,5,'Autonomo',0,0);
$pdf->Ln(3);
$pdf->Cell(45,70);    
$pdf->Cell(23,5,'Municipal',0,0);
$pdf->Ln(3);
$pdf->Cell(45,70);    
$pdf->Cell(23,5,'de El Alto',0,0);
$pdf->SetFont('Times','',16);
$pdf->Ln(1);
$pdf->Cell(110);    
$pdf->Cell(23,5,'COMISION',0,0);
$pdf->SetFont('Times','',5);
$pdf->Ln(6);
$pdf->Cell(27,30);    
$pdf->Cell(23,5,'NOMBRE Y',0,0);
$pdf->Ln(0,7);
$pdf->Cell(40,70);
$pdf->Cell(10,6,$row['nombre1'],0,0);
$pdf->Ln(0,7);
$pdf->Cell(47,70);
$pdf->Cell(10,6,$row['nombre2'],0,0);
$pdf->Ln(0,7);
$pdf->Cell(58,70);
$pdf->Cell(10,6,$row['paterno'],0,0);
$pdf->Ln(0,7);
$pdf->Cell(67,70);
$pdf->Cell(10,6,$row['materno'],0,0);
$pdf->Ln(2);
$pdf->Cell(27,30);    
$pdf->Cell(23,5,'APELLIDOS',0,0);

$pdf->Output();
}

?>