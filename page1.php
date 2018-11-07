<!DOCTYPE html>
<html>
<head>
	<title>Excel Uploading PHP</title>
        <style>
            body {font-family: Arial, Helvetica, sans-serif;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}
        </style>
	
<body>

<div class="container">
	<h1>File Upload</h1>

	<form method="POST" action="excelUpload.php" enctype="multipart/form-data">
   
  <br><br>
            </div>
		<div class="form-group">
			<label>Upload Excel File</label>
			<input type="file" name="file" >
		</div>
		<div class="form-group">
			<button type="submit" name="Submit" >Upload</button>
		</div>
<input type="button" onclick="location.href='page2.php';" value="Next" />
		<div class="form-group">
  
<input type="button" onclick="location.href='roommn.php';" value="Room Management" />
                </div>
</form>
</div>
<form action="" method="post">
            <input type="submit" name="submit2"  value="CLEAR ALL" />
        </FORM>
<form action="" method="post">
            <input type="submit" name="submit12"  value=" MASTER CLEAR" />
        </FORM>

</body>
</html>
<?php
if(isset($_POST['submit2']))
{

    $conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
        $ins1=mysqli_query($conn,"DELETE  FROM `student` ");

if ($ins1) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

}
    ?>
<?php
if(isset($_POST['submit12']))
{

    $conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
        
         $ins1=mysqli_query($conn,"DELETE  FROM `student` ");
        $ins21=mysqli_query($conn,"DELETE  FROM `course` ");
        $ins31=mysqli_query($conn,"DELETE  FROM `f401` ");
        $ins41=mysqli_query($conn,"DELETE  FROM `l02` ");
        $ins51=mysqli_query($conn,"DELETE  FROM `l04` ");
        $ins61=mysqli_query($conn,"DELETE  FROM `l07` ");
        $ins71=mysqli_query($conn,"DELETE  FROM `l08` ");
        $ins81=mysqli_query($conn,"DELETE  FROM `l109` ");
        $ins91=mysqli_query($conn,"DELETE  FROM `l112` ");
        $ins101=mysqli_query($conn,"DELETE  FROM `l201` ");
        $ins111=mysqli_query($conn,"DELETE  FROM `l208` ");
        $ins121=mysqli_query($conn,"DELETE  FROM `l217` ");
        $ins131=mysqli_query($conn,"DELETE  FROM `l218` ");
        $ins141=mysqli_query($conn,"DELETE  FROM `m12` ");
        $ins151=mysqli_query($conn,"DELETE  FROM `m13` ");
        $ins161=mysqli_query($conn,"DELETE  FROM `m15` ");
        $ins171=mysqli_query($conn,"DELETE  FROM `mpv201` ");
        $ins181=mysqli_query($conn,"DELETE  FROM `mpv311` ");
        $ins191=mysqli_query($conn,"DELETE  FROM `pg107` ");
        $ins201=mysqli_query($conn,"DELETE  FROM `pg204` ");
        $ins211=mysqli_query($conn,"DELETE  FROM `pg205` ");
        $ins221=mysqli_query($conn,"DELETE  FROM `pg206` ");
        $ins231=mysqli_query($conn,"DELETE  FROM `pg208` ");
        $ins241=mysqli_query($conn,"DELETE  FROM `pg307` ");
        $ins251=mysqli_query($conn,"DELETE  FROM `pg308` ");
        $ins261=mysqli_query($conn,"DELETE  FROM `pg309` ");
        $ins271=mysqli_query($conn,"DELETE  FROM `pg3g2` ");
        $ins281=mysqli_query($conn,"DELETE  FROM `room21` ");
                $ins281=mysqli_query($conn,"DELETE  FROM `roomcourse` ");
                        $ins281=mysqli_query($conn,"DELETE  FROM `finalroom` ");
                                                $ins282=mysqli_query($conn,"DELETE  FROM `temp` ");
                                                                $ins281=mysqli_query($conn,"DELETE  FROM `roomcourse1` ");




 
       


               

if ($ins1) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

}
    ?>

