<?php

require "config/constants.php";

$servername = HOST;
$username = USER;
$password = PASSWORD;
$db = DATABASE_NAME;

$con = new mysqli($servername, $username, $password,$db);

// Create connection
$pdo = new PDO("mysql:host=localhost;dbname=$db", $username, $password);

// Check connection



?>