<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db'); //connection establishment
header('Content-type: application/excel');
$filename = 'filename.xls';
header('Content-Disposition: attachment; filename='.$filename);

$ins1234=mysqli_query($conn,"INSERT INTO finalroom (No, room_name, capacity, status,occupy) SELECT No, room_name, capacity, status, occupy FROM `room21` ");
$query = mysqli_query($conn,"SELECT room_name,capacity,status FROM finalroom");
while($row= mysqli_fetch_array($query))
    {

        $inspector [] = $row['room_name'];
    }

foreach ($inspector as $select1)
{
    $select=$select1;
    $qu1 = mysqli_query($conn,"SELECT capacity,status FROM finalroom where room_name='$select' ");
                $row = mysqli_fetch_assoc($qu1);

        $se=$row['capacity'];
        $se1=$row['status'];
        $last=$se;
        
        
  
        if($select=='pg205')
        {
            $rows=7;
            $cols=10;
        }
         elseif($select=='pg204')
        {
            $rows=6;
            $cols=8;
        } elseif($select=='pg107')
        {
            $rows=7;
            $cols=10;
        } elseif($select=='pg206')
        {
            $rows=9;
            $cols=8;
        } elseif($select=='pg208')
        {
            $rows=6;
            $cols=10;
        } elseif($select=='pg307')
        {
            $rows=6;
            $cols=12;
        } elseif($select=='mpv311')
        {
            $rows=12;
            $cols=5;
        } elseif($select=='f401')
        {
            $rows=20;
            $cols=7;
        } elseif($select=='mpv201')
        {
            $rows=9;
            $cols=6;
        } elseif($select=='pg308')
        {
            $rows=7;
            $cols=10;
        } elseif($select=='pg309')
        {
            $rows=6;
            $cols=12;
        } elseif($select=='pg312')
        {
            $rows=7;
            $cols=9;
        } elseif($select=='l110')
        {
            $rows=6;
            $cols=8;
        } elseif($select=='l217')
        {
            $rows=6;
            $cols=8;
        } elseif($select=='l218')
        {
            $rows=6;
            $cols=8;
        } elseif($select=='l109')
        {
            $rows=7;
            $cols=10;
        } elseif($select=='l02')
        {
            $rows=6;
            $cols=8;
        } elseif($select=='l04')
        {
            $rows=6;
            $cols=8;
        } elseif($select=='l07')
        {
            $rows=8;
            $cols=6;
        } elseif($select=='l08')
        {
            $rows=6;
            $cols=8;
        } elseif($select=='l201')
        {
            $rows=7;
            $cols=6;
        } elseif($select=='m12')
        {
            $rows=8;
            $cols=10;
        } elseif($select=='m13')
        {
            $rows=9;
            $cols=8;
        }
        elseif($select=='m15')
        {
            $rows=6;
            $cols=8;
        }
        $qu1 = mysqli_query($conn,"SELECT * FROM finalroom where room_name='$select' ");
        $row = mysqli_fetch_assoc($qu1);
        $se=$row['capacity'];
        $se1=$row['status'];
        if($se1==2)
        {
            $s=$se/2;
             unset($inspector1);
             unset($inspector2);


 $coun1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM $select")); 
 $ins123=mysqli_query($conn,"INSERT INTO temp1 (Reg_no,Course) SELECT Reg_no,Course FROM $select LIMIT $s");
 $dels=mysqli_query($conn, "DELETE FROM $select LIMIT $s");
 $ins12=mysqli_query($conn,"INSERT INTO temp2 (Reg_no,Course) SELECT Reg_no,Course FROM $select LIMIT $s");
 $dels1=mysqli_query($conn, "DELETE FROM $select LIMIT $s");   
 
        echo $se;
 $i=0;
 $r=$coun1/2;
 $j=0;
 $k=1;
      $qi1 = mysqli_query($conn,"SELECT Reg_no FROM temp1 ");
        while($row = mysqli_fetch_array($qi1))
    {
        $inspector1 [] = $row['Reg_no'];
    }
   $qi21 = mysqli_query($conn,"SELECT Reg_no FROM temp2 ");
        while($row = mysqli_fetch_array($qi21))
    {
        $inspector2 [] = $row['Reg_no'];
    }
 echo "<table border='1'>";

    echo '<tr>';
     echo" <td align=center colspan=$cols >Mar Athanasius College of Engineering, Kothamangalam</td>";
 echo"</tr>";
echo"<tr>";
 echo" <td align=center colspan=$cols >Exam Hall Details for the conduct of KTU University examination </td>";
 echo"</tr>";
 echo "<tr>";
  echo"<td >Room No</td>";
  echo"<td >$select</td>";
  echo"<td colspan=2 >Date</td>";
  echo"<td colspan=3 ></td>";
  echo"<td colspan=3 >Total Students</td>";
echo" </tr>";
//echo "</table>";

 //echo "<table border='1'>";

for($tr=0;$tr<$rows;$tr++){
  


    echo "<tr>";
     echo "<td>DESK $k</td>";
   $k++;
        for($td=0;$td<$cols/2;$td++){
    
               echo "<td > $inspector1[$i] </td>";

                     $i++;
               echo "<td > $inspector2[$j]</td>";

                     $j++;                          
        }
    echo "</tr>";
}
 $ins123=mysqli_query($conn,"INSERT INTO $select (Reg_no,Course) SELECT Reg_no,Course FROM temp1 LIMIT $s");
$dels=mysqli_query($conn, "DELETE FROM temp1 LIMIT $s");
 $ins12=mysqli_query($conn,"INSERT INTO $select (Reg_no,Course) SELECT Reg_no,Course FROM temp2 LIMIT $s");
 $dels1=mysqli_query($conn, "DELETE FROM temp2 LIMIT $s");   
echo "</table>";
for($o=0;$o<=10;$o++)
{
echo "<br/><br/>";
}

            
        }
 else {
     $i=0;
     $qi1 = mysqli_query($conn,"SELECT Reg_no FROM $select ");
 unset($inspector1);
       while($row = mysqli_fetch_array($qi1))
    {

        $inspector1 [] = $row['Reg_no'];
        $inspector2 [] = $row['Reg_no'];

    }
     
     
     echo "<table border='1'>";
   
for($tr=0;$tr<$rows;$tr++){
    echo "<tr>";
        for($td=0;$td<$cols;$td++){ 
               echo "<td> $inspector1[$i]</td>";
               $i++;           

              
        }
    echo "</tr>";
}

echo "</table>";
for($o=0;$o<=10;$o++)
{
echo "<br/><br/>";
}
 }
 }
     
 $qw= mysqli_query($conn,"DELETE FROM finalroom")
        //for ($i = 0; $i < count($inspector1); $i++) { unset($inspector1[$i]); }  

?>