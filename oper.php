<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
$query = mysqli_query($conn,"SELECT Course,Branch,total FROM course1");
$row = mysqli_fetch_assoc($query);
        $se=$row['Branch'];
        $stat=$row['total'];

while($row= mysqli_fetch_array($query))
    {

        $insp [] = $row['Course'];
    }
    
     foreach ($insp as $inspe)
{
         
     }





?>