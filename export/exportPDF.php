<!-- You can use a library like TCPDF or FPDF for PDF export. Here’s a simple implementation using TCPDF.

bash
Copy
composer require tecnickcom/tcpdf -->

<?php
require_once 'vendor/autoload.php';
use TCPDF;

function exportToPDF() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM records");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdf = new TCPDF();
    $pdf->AddPage();
    $pdf->SetFont('helvetica', '', 12);

    foreach ($data as $record) {
        $pdf->Cell(0, 10, "ID: " . $record['id'], 0, 1);
        $pdf->Cell(0, 10, "Name: " . $record['name'], 0, 1);
        $pdf->Cell(0, 10, "Description: " . $record['description'], 0, 1);
        $pdf->Ln();
    }

    $pdf->Output('records.pdf', 'I');
}
?>
