<!-- Install PhpSpreadsheet to handle Excel export:

bash
Copy
composer require phpoffice/phpspreadsheet -->


<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function exportToExcel() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM records");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Name');
    $sheet->setCellValue('C1', 'Description');

    $row = 2;
    foreach ($data as $record) {
        $sheet->setCellValue('A' . $row, $record['id']);
        $sheet->setCellValue('B' . $row, $record['name']);
        $sheet->setCellValue('C' . $row, $record['description']);
        $row++;
    }

    $writer = new Xlsx($spreadsheet);
    $writer->save('records.xlsx');
    echo "Excel file generated.";
}
?>
