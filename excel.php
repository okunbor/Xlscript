<?php
require 'vendor/autoload.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
 
$spreadsheet = new Spreadsheet();
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
 
/* Set CSV parsing options */
$reader->setDelimiter(',');
$reader->setEnclosure('"');
$reader->setSheetIndex(0);
 
/* Load a CSV file and save as a XLS */
$spreadsheet = $reader->load("countries.csv");
$writer = new Xls($spreadsheet);
$writer->save('countries.xls');
 
$spreadsheet->disconnectWorksheets();
unset($spreadsheet);


?>