<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
$del= mysqli_query($conn, "DELETE FROM student where Course='Course' AND Branch='Branch'");
$de2= mysqli_query($conn, "DELETE FROM student where Course=' ' AND Branch=' '");
$insertroom=mysqli_query($conn,"INSERT INTO finalroom (No, room_name, capacity, status,occupy) SELECT No, room_name, capacity, status, occupy FROM `room21` ");
$query = mysqli_query($conn,"SELECT room_name,capacity,status FROM finalroom");
$insertroom=mysqli_query($conn,"INSERT INTO course1 (Course,Branch,total) SELECT Course,Branch,total FROM `course` ");

while($row= mysqli_fetch_array($query))
    {

        $insp [] = $row['room_name'];
    }
    foreach ($insp as $inspe)
{
    $select1=mysqli_query($conn,"SELECT capacity,status FROM finalroom where room_name='$inspe' ");
        $row = mysqli_fetch_assoc($select1);
        $se=$row['capacity'];
        $stat=$row['status'];
if($stat==2){
        $se1=$se/2;
}
 else {
     $se1=$se;
    
}

$updatefinal=mysqli_query($conn,"UPDATE finalroom SET Current='$se1' WHERE room_name='$inspe'");
}

$query1 = mysqli_query($conn,"SELECT * FROM course");
unset($inspec);
while($row= mysqli_fetch_array($query1))
    {

        $inspec [] = $row['No'];
    }
     $quer = mysqli_query($conn,"SELECT room_name,capacity,status FROM finalroom");
 unset($inspq);

while($row= mysqli_fetch_array($quer))
    {

        $inspq [] = $row['room_name'];
    }
    
    foreach ($inspec as $inspe1)
    {
    $selectc1=mysqli_query($conn,"SELECT * FROM course where No='$inspe1' ");
    $row = mysqli_fetch_assoc($selectc1);
    $cour=$row['Course'];
    $branch=$row['Branch'];
    $tot=$row['total'];  
    if($tot<=0)
    {
         break;
    }
    foreach ($inspq as $select)
    {
       
    $selectc1=mysqli_query($conn,"SELECT * FROM course where No='$inspe1' ");
    $row = mysqli_fetch_assoc($selectc1);
    $cour=$row['Course'];
    $branch=$row['Branch'];
    $tot=$row['total']; 
    if($tot<=0)
    {
         break;
    }
    if($tot<=$se1)
    {
    $totupdater=mysqli_query($conn,"UPDATE finalroom SET Current='$tot' WHERE room_name='$select'");

    }
        $select1=mysqli_query($conn,"SELECT * FROM finalroom where room_name='$select' ");
        $row = mysqli_fetch_assoc($select1);
        $se=$row['capacity'];
        $stat=$row['status'];
        $ce=$row['Current'];
        $de=$row['Current'];
        $quy12= mysqli_query($conn,"SELECT * FROM roomcourse WHERE room_name='$select'");
        $row13 = mysqli_fetch_assoc($quy12);
        $g1=$row13['Course'];
        $g2=$row13['Branch'];
        $g3=$row13['room_name'];
        $g4=$row13['total']; 
        $afe=(mysqli_query($conn,"SELECT * from course where Course!='$g1'"));
        $s= mysqli_affected_rows($conn);                     
        if($s>0)
               { 
        $selectc2=mysqli_query($conn,"SELECT * FROM course where No='$inspe1' ");
        $row = mysqli_fetch_assoc($selectc2);
        $cour=$row['Course'];
        $branch=$row['Branch'];
        $tot=$row['total'];        
        $qur= mysqli_query($conn,"INSERT INTO roomcourse (Course,Branch,room_name) VALUES ('$cour','$branch','$select')");        
        $roomupdater= mysqli_query($conn,"UPDATE roomcourse SET total='$ce' WHERE room_name='$select' AND Course='$cour' AND Branch='$branch'");
        $re=$ce;
        $le=$se-$ce;
        $le=abs($le);
        $pe=$le;
        if($le>=$se1)
          {
            $pe=$se1;
          }
         if($totl<=$pe)
           {
            $pe=$totl;
           }           
        $totalupdater=mysqli_query($conn,"UPDATE finalroom SET Current='$pe' WHERE room_name='$select'");
        $totaupdater=mysqli_query($conn,"UPDATE finalroom SET capacity='$le' WHERE room_name='$select'");
        $totl=$tot-$re;
        $totl=abs($totl);
        $courseupdater= mysqli_query($conn,"UPDATE course SET total='$totl' WHERE Course='$cour' AND Branch='$branch'");
       
         if($pe<=0)
          {
            $del= mysqli_query($conn,"DELETE FROM finalroom WHERE room_name='$select'");
             $quer = mysqli_query($conn,"SELECT room_name,capacity,status FROM finalroom");
             unset($inspq);

while($row= mysqli_fetch_array($quer))
    {

        $inspq [] = $row['room_name'];
    }
          }
          echo $inspe1;
             }
               else {
                      break;
                      }  
    }
    }
    
    
    $querZ = mysqli_query($conn,"SELECT * FROM roomcourse");
        unset ($insw);
 $lastup1= mysqli_query($conn,"UPDATE student SET Room='aa'");
while($row= mysqli_fetch_array($querZ))
    {

        $insw [] = $row['No'];
    }
    foreach ($insw as $new)
    {
    $selectb1=mysqli_query($conn,"SELECT * FROM roomcourse where No='$new'");
     $row = mysqli_fetch_assoc($selectb1);
        $ab=$row['Course'];
        $ac=$row['Branch'];
        $ad=$row['room_name'];
        $ae=$row['total'];
      $lastup= mysqli_query($conn,"UPDATE student SET Room='$ad' WHERE Course='$ab' AND Branch='$ac' AND Room='aa' LIMIT $ae");

    
    
        
    }
    $querZy = mysqli_query($conn,"SELECT * FROM room21");
    unset($insl);
     while($row= mysqli_fetch_array($querZy))
    {

        $insl [] = $row['room_name'];
    } 
    
    foreach ($insl as $res)
    {
        $rs=$res;
   $ins1234=mysqli_query($conn,"INSERT INTO $res (Reg_no,Course) SELECT Register,Course FROM student WHERE Room='$rs'");
   echo $res;
    }
    
?>

<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db'); //connection establishment
header('Content-type: application/excel');
$filename = 'filename.xls';
header('Content-Disposition: attachment; filename='.$filename);
 $qw= mysqli_query($conn,"DELETE FROM finalroom");


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
 $k=1;
       while($row = mysqli_fetch_array($qi1))
    {

        $inspector1 [] = $row['Reg_no'];
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


   
for($tr=0;$tr<$rows;$tr++){
    echo "<tr>";
    echo "<td>DESK $k</td>";
   $k++;
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
     
        //for ($i = 0; $i < count($inspector1); $i++) { unset($inspector1[$i]); }  

?>