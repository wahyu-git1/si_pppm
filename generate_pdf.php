<?php
require_once('tcpdf/tcpdf.php'); // Sesuaikan dengan path ke file TCPDF

// ... (kode sebelumnya)

$pdf = new TCPDF();
$pdf->SetAutoPageBreak(TRUE, 10);
$pdf->AddPage();

// Header
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'Id Santri', 1);
$pdf->Cell(40, 10, 'Nama Santri', 1);
$pdf->Cell(30, 10, 'Tahun Ajar', 1);
$pdf->Cell(30, 10, 'Kedisiplinan', 1);
$pdf->Cell(30, 10, 'Kesopanan', 1);
$pdf->Cell(30, 10, 'Keaktifan', 1);
$pdf->Cell(30, 10, 'Ketertiban', 1);
$pdf->Ln();

// Data
while ($row = mysqli_fetch_assoc($getAllelement)) {
    $pdf->Cell(30, 10, $row['id_santri'], 1);
    $pdf->Cell(40, 10, $row['nama'], 1);
    $pdf->Cell(30, 10, $row['tahun_ajar'], 1);
    $pdf->Cell(30, 10, $row['kedisiplinan'], 1);
    $pdf->Cell(30, 10, $row['kesopanan'], 1);
    $pdf->Cell(30, 10, $row['keaktifan'], 1);
    $pdf->Cell(30, 10, $row['ketertiban'], 1);
    $pdf->Ln();
}

// ... (kode setelahnya)

// Menyimpan PDF
$pdf->Output('nilai.pdf', 'D'); // Menyimpan dan menampilkan file PDF
?>
