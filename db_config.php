<<<<<<< HEAD
<?php
	$dbHost = "localhost";
	$dbDatabase = "mace";
	$dbPasswrod = "";
	$dbUser = "root";
	$mysqli = new mysqli($dbHost, $dbUser, $dbPasswrod, $dbDatabase);
        $conn = new PDO("mysql:host=$dbHost;dbname=$dbDatabase", $dbUser, $dbPasswrod);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
=======
<?php
	$dbHost = "localhost";
	$dbDatabase = "mace";
	$dbPasswrod = "";
	$dbUser = "root";
	$mysqli = new mysqli($dbHost, $dbUser, $dbPasswrod, $dbDatabase);
        $conn = new PDO("mysql:host=$dbHost;dbname=$dbDatabase", $dbUser, $dbPasswrod);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
>>>>>>> a0c60a995dcfc34babe70e8b9fd0bf1ccc749559
?>