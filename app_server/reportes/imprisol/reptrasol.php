<?php
//Example FPDF script with PostgreSQL
//Ribamar FS - ribafs@dnocs.gov.br

require '../../../fpdf/fpdf.php';



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../../../assets/images/cintillo12.jpg',10,10);

    // Arial bold 15
    $this->SetFont('Arial','B',15);
 
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

function LoadData($id)
{
$conectar = pg_connect("host =localhost port=5432 dbname=resomehv password=j20903635mc user=postgres")  
or die("<BR>ERROR accediendo a la BD!<BR>");
$query = "SELECT * from tramite ";
$result = pg_query($query);
$datas[$id] = array();
$id=0;
while($row = pg_fetch_array($result))
{
$datas[$id] = array($row['numero_rd'],$row['nombre_solicitante'],$row['unidad_responsable'],$row['tramite']);
$id++;
}
return $datas; 
}

//Tabla simple
function BasicTable($header,$data)
{
//Cabecera$i=0;
    $i=0;
    $alto=0;
    $ancho=0;
foreach($header as $col){
    $i++;
    if ($i==1) {
        $alto=10;
        $ancho=6;
    }elseif ($i==2) {
        $alto=85;
        $ancho=6;
    }elseif ($i==3) {
        $alto=65;
        $ancho=6;
    }elseif ($i==4) {
        $alto=85;
        $ancho=6;
    }

$this->SetDrawColor(0,0,0);
$this->SetFillColor(194,210,19);
$this->SetTextColor(0,0,0); 
$this->Cell($alto,$ancho,$col,1, 0, '', true);

}

$this->Ln();
foreach($data as $col1){
$this->Cell(10,6,$col1[0],1);
$this->Cell(85,6,$col1[1],1);
$this->Cell(65,6,$col1[2],1); 
$this->Cell(85,6,$col1[3],1); 
$this->Ln();
}
}
}

// Creación del objeto de la clase heredada

$pdf = new PDF('L','mm','Letter');
$pdf->AliasNbPages();
$pdf->SetMargins(15, 25 , 30); //margen superior, derecha e izquierda
$pdf->SetAutoPageBreak(true,25); //margen inferior
$pdf->SetFont('Times','',14);
$pdf->Ln(20);
$pdf->SetFont('Times','',12);



$id=0;
$i=10;
$data=$pdf->LoadData($id);
$pdf->SetFont('Arial','B',10);
$pdf->AddPage();
$pdf->Cell(50,'','TOTAL SOLICITUDES',0,'C','false'); 
$pdf->Ln(10);
$header=array('RD','SOLICITANTE','DEPARTAMENTO','TRAMITE');
$pdf->basicTable($header,$data, $i);
$pdf->Output();

?>