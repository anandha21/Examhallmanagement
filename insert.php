<?php

require_once 'db_config.php';
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['cappa'];
$contact = $_POST['seat'];
$address = $_POST['stat'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysqli_query($conn,"insert into room(room_name, capacity, status, occupy) values ('$name', '$email', '$contact', '$address')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
?>