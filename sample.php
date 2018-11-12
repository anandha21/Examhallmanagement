<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
$del= mysqli_query($conn, "DELETE FROM student where Course='Course' AND Branch='Branch'");
$de2= mysqli_query($conn, "DELETE FROM student where Course=' ' AND Branch=' '");
$insertroom=mysqli_query($conn,"INSERT INTO finalroom (No, room_name, capacity, status,occupy) SELECT No, room_name, capacity, status, occupy FROM `room21` ");

$query = mysqli_query($conn,"SELECT room_name,capacity,status FROM finalroom");
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

    foreach ($inspq as $select)
    {
        $select1=mysqli_query($conn,"SELECT capacity,status FROM finalroom where room_name='$select' ");
        $row = mysqli_fetch_assoc($select1);
        $se=$row['capacity'];
        $stat=$row['status'];
        $ce=$row['Current'];
        $quy12= mysqli_query($conn,"SELECT * FROM roomcourse1 WHERE room_name='$select'");
        $row13 = mysqli_fetch_assoc($quy12);
        $g1=$row13['Course'];
        $g2=$row13['Branch'];
        $g3=$row13['room_name'];
        $g4=$row13['total']; 
                                  
     if(mysqli_query($conn,"SELECT * from course where NOT Course='$g1'"))
               { 
         $qur= mysqli_query($conn,"INSERT INTO roomcourse (Course,Branch,room_name) VALUES ('$cour','$branch','$select')");
         $roomupdater= mysqli_query($conn,"UPDATE roomcourse SET total='$se1' WHERE room_name='$select' AND Course='$cour' AND Branch='$branch'");
          
          echo $inspe1;
             }
 else {
                      break;
}
    }
    }






?>