This is a csv to excel converter. 
Update will be made based on request.

To use this script you must have php >=7.4 install.

Uncoment gd* extension in your php.ini file [;extention =gd ] .

run : composer install  

edit the "excel.php"  with the corresponding csv file and the output name of your excel sheet.

Example :

/* Load a CSV file and save as a XLS */
$spreadsheet = $reader->load(" myCSVfile");
$writer = new Xls($spreadsheet);
$writer->save('outputName.xls');
 
$spreadsheet->disconnectWorksheets();
unset($spreadsheet);
