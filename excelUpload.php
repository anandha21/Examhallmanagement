<?php

require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');
require('db_config.php');
require('page1.php');
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');

if(isset($_POST['Submit'])){

	$mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
	if(in_array($_FILES["file"]["type"],$mimes)){

		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		
		$uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);

		$Reader = new SpreadsheetReader($uploadFilePath);
                

		$totalSheet = count($Reader->sheets());
                

		echo "You have total ".$totalSheet." sheets".

		$html="<table border='1'>";

		/* For Loop for all sheets */
		for($i=0;$i<$totalSheet;$i++){

			$Reader->ChangeSheet($i);
			foreach ($Reader as $Row)
	        {
	        	$html.="<tr>";
				/* Check If sheet not emprt */
		        $student = isset($Row[0]) ? $Row[0] : '';
				$regno = isset($Row[1]) ? $Row[1] : '';
                                   $branch = isset($Row[2]) ? $Row[2] : '';
				$course = isset($Row[3]) ? $Row[3] : '';
                           ;


				$query = "insert into student(Student,Register,Branch,Course) values('".$student."','".$regno."','".$branch."','".$course."')";
                                           

				$mysqli->query($query);

	        }

		}
                $del23= mysqli_query($conn, "DELETE FROM student where Course='Course' AND Branch='Branch'");
$del2= mysqli_query($conn, "DELETE FROM student where Course=' ' AND Branch=' '");
                
                $qry1=mysqli_query($conn,"SELECT * FROM student WHERE Course='".$course."' AND Branch='".$branch."'");
                
                $count = mysqli_num_rows($qry1);
                                           echo $count;
                                           
                	 $query10 = "insert into course(Course,Branch,total) values('".$course."','".$branch."','".$count."')";
                          $mysqli->query($query10);
                           


		$html.="</table>";
		echo $html;
		echo "<br />Data Inserted in dababase";

	}else { 
		die("<br/>Sorry, File type is not allowed. Only Excel file."); 
	}

}

?>