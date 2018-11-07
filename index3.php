<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
$del2= mysqli_query($conn, "DELETE FROM student where Course='Course' AND Branch='Branch'");
$del2= mysqli_query($conn, "DELETE FROM student where Course='Course' AND Branch='Branch'");


$ins1234=mysqli_query($conn,"INSERT INTO finalroom (No, room_name, capacity, status,occupy) SELECT No, room_name, capacity, status, occupy FROM `room21` ");


    $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM room21"));
        $count1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM course"));

//$query11 = mysqli_query($conn,"SELECT Branch,Course FROM student");
//$query1 = mysqli_query($conn,"SELECT Register,Branch,Course FROM student");

        $query = mysqli_query($conn,"SELECT room_name,capacity,status FROM finalroom");

		        
                             

	        
    while($row = mysqli_fetch_array($query))
    {

        $inspector [] = $row['room_name'];
                $inspector1 [] = $row['capacity'];
    }

$pg204='pg204';
foreach ($inspector as $select)
{
    $qu1 = mysqli_query($conn,"SELECT capacity,status FROM room21 where room_name='$select' ");
                $row = mysqli_fetch_assoc($qu1);

        $se=$row['capacity'];
        $se1=$row['status'];
        $last=$se;
      if($se1==2)
      {
          $s=($se/2);
         $qu12= mysqli_query($conn,"SELECT No,Course,Branch,total FROM course");
                                  $row1 = mysqli_fetch_assoc($qu12);
                                 $q1=$row1['Course'];
        $q2=$row1['Branch'];
        $q3=$row1['No'];
        $q4=$row1['total'];

$ins123=mysqli_query($conn,"INSERT INTO $select (Reg_no,Course) SELECT Register,Course FROM student where Course='$q1' AND Branch='$q2' LIMIT $s");
$s= mysqli_affected_rows($conn);
$del1= mysqli_query($conn, "DELETE FROM student where Course='$q1' AND Branch='$q2' LIMIT $s");
$p=($q4-$s);
echo 'haii1111  ';

   echo "<br>" .$p."";

if($up1= mysqli_query($conn, "UPDATE course SET total='$p' WHERE No='$q3'"))
{echo 'Good';} 
$ss=0;

$up123=mysqli_query($conn, "DELETE FROM course  where total<=$ss");
$insert1=mysqli_query($conn,"insert into roomcourse (Course,Branch,room_name,total) values('".$q1."','".$q2."','".$select."','".$s."')
");
  $insert11=mysqli_query($conn,"insert into roomcourse1 (Course,Branch,room_name,total) values('".$q1."','".$q2."','".$select."','".$s."')
");
   $q3++;
echo $q3;
$qu13= mysqli_query($conn,"SELECT No,Course,Branch,total FROM course where No='$q3'");
                                 $row = mysqli_fetch_assoc($qu13);
                             $q1=$row['Course'];
        $q2=$row['Branch'];
        $q13=$row['No'];
                $q14=$row['total'];

        $ins124=mysqli_query($conn,"INSERT INTO $select (Reg_no,Course) SELECT Register,Course FROM student where Course='$q1' AND Branch='$q2' LIMIT $s
");
        $s= mysqli_affected_rows($conn);

$del2= mysqli_query($conn, "DELETE FROM student where Course='$q1' AND Branch='$q2' LIMIT $s");
$p1=($q14-$s);
echo 'haii222  ';

   echo "<br>" .$p1."";

if($up1= mysqli_query($conn, "UPDATE course SET total='$p1' WHERE No='$q13'"))
{echo 'Good';}    
$ss=0;
$insert1=mysqli_query($conn,"insert into roomcourse (Course,Branch,room_name,total) values('".$q1."','".$q2."','".$select."','".$s."')
");
$insert12=mysqli_query($conn,"insert into roomcourse1 (Course,Branch,room_name,total) values('".$q1."','".$q2."','".$select."','".$s."')
");
$up123=mysqli_query($conn, "DELETE FROM course  where total<=$ss");
    

            
      }
 else {
          $s=$se;
     
           $qu12= mysqli_query($conn,"SELECT No,Course,Branch,total FROM course");
                                 $row1 = mysqli_fetch_assoc($qu12);
                                 $q1=$row1['Course'];
        $q2=$row1['Branch'];
        $q3=$row1['No'];
        $q4=$row1['total'];

$ins123=mysqli_query($conn,"INSERT INTO $select (Reg_no,Course) SELECT Register,Course FROM student where Course='$q1' AND Branch='$q2' LIMIT $s
");
$s= mysqli_affected_rows($conn);
$del1= mysqli_query($conn, "DELETE FROM student where Course='$q1' AND Branch='$q2' LIMIT $s");
$insert1=mysqli_query($conn,"insert into roomcourse (Course,Branch,room_name,total) values('".$q1."','".$q2."','".$select."','".$s."')
");
$insert13=mysqli_query($conn,"insert into roomcourse1 (Course,Branch,room_name,total) values('".$q1."','".$q2."','".$select."','".$s."')
");
$p=($q4-$s);
echo 'haii  ';
   echo "<br>" .$p."";


if($p<0)
{
    $p=0;
}

if($up19= mysqli_query($conn, "UPDATE course SET total='$p' WHERE No='$q3'"))
{echo 'Good';}
$ss=0;
$up123=mysqli_query($conn, "DELETE FROM course  where total<=$ss");
  
      }
      $cou1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM $select"));
    $set1=($se-$cou1);
    $up1= mysqli_query($conn, "UPDATE room21 SET capacity='$set1' WHERE room_name='$select'");

      
      

   
   echo "<br>" .$select."";
    //$query12 = mysqli_query($conn,"insert into student(Room) values ('".$select."')");
    $coun1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM $select"));
    
    if ($coun1==$last)
    {
        $roomdel=mysqli_query($conn, "DELETE FROM room21  where room_name='$select'");
        $courdel=mysqli_query($conn, "DELETE FROM roomcourse  where room_name='$select' AND Course='$q1' AND Branch='$q2'");     
        echo 'delete';

    }

}

            
           




?>
<?php

$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
     
$query = mysqli_query($conn,"SELECT room_name,capacity,status FROM room21");

            
	        
    while($row = mysqli_fetch_array($query))
    {

        $inspector [] = $row['room_name'];
                $inspector1 [] = $row['capacity'];
    }

foreach ($inspector as $select)
{
    a:
    $qu1 = mysqli_query($conn,"SELECT capacity,status,occu FROM room21 where room_name='$select' ");
                $row = mysqli_fetch_assoc($qu1);

        $se=$row['capacity'];
        $se1=$row['status'];
        $reca=$row['occu'];

        $last=$reca;
      if($se1==2)
      {
          $s=($reca/2);
                 
                 

         $qu12= mysqli_query($conn,"SELECT No,Course,Branch,total FROM course");
                                  $row15 = mysqli_fetch_assoc($qu12);
                                 $q1=$row15['Course'];
        $q2=$row15['Branch'];
        $q3=$row15['No'];
        $q4=$row15['total'];
        $quy12= mysqli_query($conn,"SELECT Course,Branch,room_name,total FROM roomcourse WHERE Course='$q1' AND Branch='$q2' AND room_name='$select'");
        $row13 = mysqli_fetch_assoc($quy12);
        $g1=$row13['Course'];
        $g2=$row13['Branch'];
        $g3=$row13['room_name'];
        $g4=$row13['total'];
if($q1==$g1 && $q2==$g2 && $select==$g3)
{
    if($g4>=$s)
    {
        echo 'cant insert';
    }
    else if($g4<=$s){
        $rt=$se;
        echo 'itsmee1111111111  ';
   echo "<br>" .$rt."";
$inrt1=mysqli_query($conn,"INSERT INTO $select (Reg_no,Course) SELECT Register,Course FROM student where Course='$q1' AND Branch='$q2' LIMIT $rt");
$rt= mysqli_affected_rows($conn);

$del1= mysqli_query($conn, "DELETE FROM student where Course='$q1' AND Branch='$q2' LIMIT $rt");
$p=($q4-$rt);
echo 'haii1996  ';
   echo "<br>" .$p."";
      echo $q1;

if($up1= mysqli_query($conn, "UPDATE course SET total='$p' WHERE No='$q3'"))
{echo 'Gooooooooooooooooood';} 
$ss=0;

$insert1=mysqli_query($conn,"insert into roomcourse (Course,Branch,room_name,total) values('".$q1."','".$q2."','".$select."','".$rt."')
");
  $insert11=mysqli_query($conn,"insert into roomcourse1 (Course,Branch,room_name,total) values('".$q1."','".$q2."','".$select."','".$rt."')
");        
  $up123=mysqli_query($conn, "DELETE FROM course  where total<=$ss");

    }
       
}
else{
    
         $qu12= mysqli_query($conn,"SELECT No,Course,Branch,total FROM course");
                                  $row15 = mysqli_fetch_assoc($qu12);
                                 $q1=$row15['Course'];
        $q2=$row15['Branch'];
        $q3=$row15['No'];
        $q4=$row15['total'];
        $quy12= mysqli_query($conn,"SELECT Course,Branch,room_name,total FROM roomcourse WHERE Course='$q1' AND Branch='$q2'");
        $row13 = mysqli_fetch_assoc($quy12);
        $g1=$row13['Course'];
        $g2=$row13['Branch'];
        $g3=$row13['room_name'];
        $g4=$row13['total'];
    $rt=$se;
    echo 'SECOND ONE FIRST';
       echo "<br>" .$rt."";

    $inrt1=mysqli_query($conn,"INSERT INTO $select (Reg_no,Course) SELECT Register,Course FROM student where Course='$q1' AND Branch='$q2' LIMIT $rt");
$rt= mysqli_affected_rows($conn);
echo 'SECOND ONE SECOND';
   echo "<br>" .$rt."";
   echo $q1;



$del1= mysqli_query($conn, "DELETE FROM student where Course='$q1' AND Branch='$q2' LIMIT $rt");
$p=($q4-$rt);
echo 'haii1997  ';
   echo "<br>" .$p."";
   
if($p<0)
{
    $p=0;
}
if($up1= mysqli_query($conn, "UPDATE course SET total='$p' WHERE No='$q3'"))
{echo 'Gooooooooooooooooood1111111111111111111';} 
$ss=0;

$insert1=mysqli_query($conn,"insert into roomcourse (Course,Branch,room_name,total) values('".$q1."','".$q2."','".$select."','".$rt."')
");
  $insert11=mysqli_query($conn,"insert into roomcourse1 (Course,Branch,room_name,total) values('".$q1."','".$q2."','".$select."','".$rt."')
");
  $up123=mysqli_query($conn, "DELETE FROM course  where total<=$ss");

}

    
}
 else {
     
     
       $s=$se;
     
           $qu12= mysqli_query($conn,"SELECT No,Course,Branch,total FROM course");
                                 $row1 = mysqli_fetch_assoc($qu12);
                                 $q1=$row1['Course'];
        $q2=$row1['Branch'];
        $q3=$row1['No'];
        $q4=$row1['total'];

$ins123=mysqli_query($conn,"INSERT INTO $select (Reg_no,Course) SELECT Register,Course FROM student where Course='$q1' AND Branch='$q2' LIMIT $s
");
$s= mysqli_affected_rows($conn);
$del1= mysqli_query($conn, "DELETE FROM student where Course='$q1' AND Branch='$q2' LIMIT $s");
$insert1=mysqli_query($conn,"insert into roomcourse (Course,Branch,room_name,total) values('".$q1."','".$q2."','".$select."','".$s."')
");
$insert13=mysqli_query($conn,"insert into roomcourse1 (Course,Branch,room_name,total) values('".$q1."','".$q2."','".$select."','".$s."')
");
$p=($q4-$s);
echo 'haii1998  ';
   echo "<br>" .$p."";


if($p<0)
{
    $p=0;
}

if($up19= mysqli_query($conn, "UPDATE course SET total='$p' WHERE No='$q3'"))
{echo 'Good';}
$ss=0;
$up123=mysqli_query($conn, "DELETE FROM course  where total<=$ss");
  
      }
      $cou1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM $select"));
    $set1=($reca-$cou1);
    $up1= mysqli_query($conn, "UPDATE room21 SET capacity='$set1' WHERE room_name='$select'");

      
      

   
   echo "<br>" .$select."";
    //$query12 = mysqli_query($conn,"insert into student(Room) values ('".$select."')");
    $coun1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM $select"));
    
    if ($coun1>=$last)
    {
        $roomdel=mysqli_query($conn, "DELETE FROM room21  where room_name='$select'");
        $courdel=mysqli_query($conn, "DELETE FROM roomcourse  where room_name='$select' ");
        if($courdel)
        {
                    echo 'delete full';

            
        }
 else {
            echo 'nop fill';
            
            goto a;
        }
            
     

    }
    
     
 }
 
 
 
 


 
 
 
   
 $coun2= mysqli_num_rows(mysqli_query($conn, "SELECT * FROM course"));

        if($coun2==0){
            echo 'it is empty';
            $er=0;
            
        }
 else {
            echo 'not empty'; 
            $er=1;     
 }
?>


<?php

$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');


if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
     
    
$result = mysqli_query($conn,"SELECT * FROM f401");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Reg_no'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);

?>