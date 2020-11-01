<?php
require_once("Genpdf.php");
$db_handle = new Genpdf();
$result = $db_handle->runQuery("SELECT id,firstname,lastname,dept,checked_papers,rate,amount FROM profile ");
$header = $db_handle->runQuery("SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='db1' 
    AND `TABLE_NAME`='profile'
	AND `COLUMN_NAME`!='faculty'
	AND `COLUMN_NAME`!='email_id'
	AND `COLUMN_NAME`!='gender'
	AND `COLUMN_NAME`!='mob_no'
	AND `COLUMN_NAME`!='course'
	AND `COLUMN_NAME`!='marksheet'
	AND `COLUMN_NAME`!='submitted'
		");

require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);		
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(26,10,$column_heading,1);
}
foreach($result as $row) {
	$pdf->SetFont('Arial','',8);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(26,10,$column,1);
}
$pdf->Output();
?>