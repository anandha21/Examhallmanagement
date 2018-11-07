<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db'); //connection establishment
$query = mysqli_query($conn,"SELECT room_name,capacity,status FROM finalroom");
while($row= mysqli_fetch_array($query))
    {

        $inspector [] = $row['room_name'];
    }

foreach ($inspector as $select1)
{
    $select=$select1;
    $qu1 = mysqli_query($conn,"SELECT capacity,status FROM room21 where room_name='$select' ");
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
        
        //for ($i = 0; $i < count($inspector1); $i++) { unset($inspector1[$i]); }  
$qi1 = mysqli_query($conn,"SELECT Reg_no FROM $select ");
 unset($inspector1);

        while($row = mysqli_fetch_array($qi1))
    {

        $inspector1 [] = $row['Reg_no'];
        $inspector2 [] = $row['Reg_no'];

    }
 //foreach($inspector1 as $sep)
       // {
        
           // echo "$sep";
      
       // }
        $coun1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM $select"));
        echo $se;
 $i=0;
 $r=$coun1/2;
 $j=$coun1/2;
 
if($coun1<=$se)
{
    echo "<table border='1'>";

for($tr=0;$tr<$rows;$tr++){

    echo "<tr>";
    
        for($td=0;$td<$cols/2;$td++){
                        if($i<=$r)
                        {
               echo "<td> $inspector1[$i] </td>";
              // $del221= mysqli_query($conn, "DELETE FROM $select where Reg_no='$inspector1[$i]'");

        $i++;
                        }
 else {
                            break;
 }
               echo "<td> $inspector1[$j]</td>";
          //  $del31= mysqli_query($conn, "DELETE FROM $select where Reg_no='$inspector1[$i]'");

               $j++;               

               
        }
    echo "</tr>";
}

echo "</table>";
}
 else {

echo "<table border='1'>";
    


for($tr=0;$tr<$rows;$tr++){

    echo "<tr>";
        for($td=0;$td<$cols/2;$td++){
            if($i<=$r)
            {
               echo "<td> $inspector1[$i] </td>";
                          $del221= mysqli_query($conn, "DELETE FROM $select where Reg_no='$inspector1[$i]'");

               $i++; 
               
            }
 else {
                continue;
 }
               echo "<td> $inspector1[$j]</td>";
                      $del31= mysqli_query($conn, "DELETE FROM $select where Reg_no='$inspector1[$j]'");

               $j++;           

               
        }
    echo "</tr>";
}

echo "</table>";
 }

}
?>