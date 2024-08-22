<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Submit</title>
    <link rel="stylesheet" href="excel.css">

    
</head>
<body>
<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

// File path
$filePath = 'form_data.xlsx';

// Collect form data
$name = $_POST['name'];
$phone = $_POST['contact'];
$email = $_POST['email'];
$msg = $_POST['msg'];


if (file_exists($filePath)) {
    // Load existing spreadsheet
    $spreadsheet = IOFactory::load($filePath);
} else {
    // Create a new spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'Name');
    $sheet->setCellValue('B1', 'Phone');
    $sheet->setCellValue('C1', 'Email');
    $sheet->setCellValue('D1', 'Message');

}

$sheet = $spreadsheet->getActiveSheet();
$highestRow = $sheet->getHighestRow();
$newRow = $highestRow + 1;

$sheet->setCellValue('A' . $newRow, $name);
$sheet->setCellValue('B' . $newRow, $phone);
$sheet->setCellValue('C' . $newRow, $email);
$sheet->setCellValue('D' . $newRow, $msg);

// Write the spreadsheet to a file
$writer = new Xlsx($spreadsheet);
$writer->save($filePath);

//echo "Data saved to Excel file successfully!";
?>

    <div class="msg_box">
        <div class="check_font">
            <i class="fa-solid fa-check"></i>
        </div>
        <h2>Your Register Form is successfully Submited</h2>
        <a href="../index.html">Done</a>
    </div>

    

<script src="https://kit.fontawesome.com/8b7cdef8f0.js" crossorigin="anonymous"></script>
</body>
</html>