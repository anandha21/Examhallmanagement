<HTML>
<HEAD>
	<STYLE>
		body {
			font-family: Arial;
		}
		a {color: blue}
	</STYLE>
	<SCRIPT>
		function listbox_move(listID, direction) {

			var listbox = document.getElementById(listID);
			var selIndex = listbox.selectedIndex;

			if(-1 == selIndex) {
				alert("Please select an option to move.");
				return;
			}

			var increment = -1;
			if(direction == 'up')
				increment = -1;
			else
				increment = 1;

			if((selIndex + increment) < 0 ||
				(selIndex + increment) > (listbox.options.length-1)) {
				return;
			}

			var selValue = listbox.options[selIndex].value;
			var selText = listbox.options[selIndex].text;
			listbox.options[selIndex].value = listbox.options[selIndex + increment].value
			listbox.options[selIndex].text = listbox.options[selIndex + increment].text

			listbox.options[selIndex + increment].value = selValue;
			listbox.options[selIndex + increment].text = selText;

			listbox.selectedIndex = selIndex + increment;
		}

		function listbox_moveacross(sourceID, destID) {
			var src = document.getElementById(sourceID);
			var dest = document.getElementById(destID);


			for(var count=0; count < src.options.length; count++) {

				if(src.options[count].selected == true) {
						var option = src.options[count];

						var newOption = document.createElement("option");
                                   

						newOption.value = option.value;
						newOption.text = option.text;
						newOption.selected = true;
						try {
								 dest.add(newOption, null); //Standard
								 src.remove(count, null);
						 }catch(error) {
								 dest.add(newOption); // IE only
								 src.remove(count);
						 }
						count--;

				}

			}

		}
		function listbox_selectall(listID, isSelect) {

			var listbox = document.getElementById(listID);
			for(var count=0; count < listbox.options.length; count++) {

				listbox.options[count].selected = isSelect;

			}
		}
	</SCRIPT>
	<TITLE>Listbox JavaScript functions</TITLE>
</HEAD>
<BODY>
    
<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
$sum=0;
?>
          
<table>
<tr valign="top">
<td>



<br/><br/>

Select
<a href="#" onclick="listbox_selectall('a', true)">all</a>,
<a href="#" onclick="listbox_selectall('a', false)">none</a>
</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>
<form action="" method="post">

<SELECT name="name" id="s" size="10" multiple>
	<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
$a = array();

    $result = $conn->query("select * from room"); 
                        while ($row = $result->fetch_assoc()) {

                  echo '<option value="'.$row['room_name'].'"> '.$row['room_name'].' '.$row['capacity'].'</option>';


                        } 
                       
echo'</SELECT>';
?>
        </td>

   
<td valign="center">


</td>
<td>

<SELECT name="name1[]" id="d" size="10" multiple>
	
</SELECT>
</td>
</tr>
</table>
    <input type="button" name="submit1" onclick="listbox_moveacross('s', 'd');" value=">>"> 
    <input type="button" name="submit2" onclick="listbox_moveacross('d', 's');" value="<<">


<?php ?>
         
   


    <input type="submit" name="submit1"  value="Next" />
      </form>
</BODY>
</HTML>
<?php
if(isset($_POST['submit1']))
{

    $conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
    
    
      
        foreach ($_POST['name1'] as $selectedOption){


$ins=mysqli_query($conn,"INSERT INTO room21 (No, room_name, capacity, status,occupy,occu)  
SELECT No, room_name, capacity, status, occupy,capacity 
  FROM `room`
 WHERE `room_name` = '$selectedOption'
");




    if($ins)
    {
        echo  '';
    }
    else
    {
        echo mysqli_error($conn);
    }
        }
$result = mysqli_query($conn,'SELECT SUM(capacity) AS value_sum FROM room21'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];


}

?>
<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');

  
                        $sql="SELECT * FROM student ORDER BY No";
$result=mysqli_query($conn,$sql);
if ($result)
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  mysqli_free_result($result);
  }

$qry='SELECT SUM(capacity) from `room`';

 $add=mysqli_query($conn,$qry);
  while($row1=mysqli_fetch_array($add))
  {
    $mark=$row1['SUM(capacity)'];
  

                         ?>
  <?php } ?>
<HTML>
    <HEAD>
        
    </HEAD>
    <BODY>
        <form action="" method="post">
Total Students: <input type="text" name="studno" value="<?php echo $rowcount; ?>">
Selected Seats: <input type="text" name="LastName" value="<?php echo $sum; ?>">
Seats Available: <input type="text" name="LastName" value="<?php echo ($mark-$sum); ?>">

</form>
        <form action="" method="post">
            <input type="submit" name="submit2"  value="CLEAR ALL" />
        </FORM>

    </body>
        <input type="submit"  onclick="location.href='index3.php';"  value="Next" />

</HTML
<?php
if(isset($_POST['submit2']))
{

    $conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
        $ins1=mysqli_query($conn,"DELETE  FROM `room21` ");

if ($ins1) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}



}
    ?>