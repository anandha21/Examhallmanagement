<?php

include 'PHPExcel/PHPExcel.php';
include 'PHPExcel/PHPExcel/Writer/Excel2007.php';

$objPHPExcel = new PHPExcel();


$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Hello');
$objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Trudeau');
$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Fernandes');

$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));

echo " Click here for gerate xlsx file <a href='test.xlsx'>clicking me</a>";
?>