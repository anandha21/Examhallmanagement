<?php
require_once 'db_config.php';
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');

$sql = 'SELECT * FROM room';
		
$query = mysqli_query($conn,$sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
                .new{
                         display: inline;

                     padding: 10px 20px;
                border-radius: 4px;
                 position: absolute;
                 bottom: -500px;
                 right: 250px;
                }
                
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>MACE EXAM HALL MASTER</h1>
	<table class="data-table">
		<caption class="title">EXAM HALL DETIALS</caption>
		<thead>
			<tr>
				<th>NO</th>
				<th>Room Name</th>
				<th>Capacity</th>
				<th>Seating Style</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['room_name'].'</td>
					<td>'.$row['capacity'].'</td>
                                         <td>'.$row['status'].'</td>
                                        <td><input type="button" name="delete" value="delete"></td>
				</tr>';
                        $no++;
                        
      
		}
                                  if($_GET){
    if(isset($_GET['delete'])){
        delete();
    }//elseif(isset($_GET['select'])){
        //select();
    //}
}

    function delete()
    {
    	$delete1 =("DELETE FROM `usrdata` WHERE id = '$id'");
        $result = mysqli_query($conn,$delete1) or die(mysqli_error());
        
	echo "record deleted";
   
   
 
    }
    ?>
                    
<div class="new">
    <form action="insert.php" method="post"> 
        <label>Room Name:</label>
<input class="input" name="name" type="text" value="">
<label>Capacity</label>
<input class="input" name="cappa" type="text" value="">
<label>Seating Style:</label>
<input class="input" name="seat" type="text" value="">
<label>Status:</label>
<input class="input" name="stat" type="text" value="">
<input class="submit" name="submit" type="submit" value="Insert">
    </form>
        
    
    
    

         </div>           

       
		</tbody>
		<tfoot>
			<tr>
			</tr>
		</tfoot>
	</table>
</body>
</html>