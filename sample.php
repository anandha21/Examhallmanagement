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