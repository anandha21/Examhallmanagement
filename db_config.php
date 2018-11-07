<?php
	$dbHost = "localhost";
	$dbDatabase = "mace";
	$dbPasswrod = "";
	$dbUser = "root";
	$mysqli = new mysqli($dbHost, $dbUser, $dbPasswrod, $dbDatabase);
        $conn = new PDO("mysql:host=$dbHost;dbname=$dbDatabase", $dbUser, $dbPasswrod);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>