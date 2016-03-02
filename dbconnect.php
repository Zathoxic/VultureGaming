<?php

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "vulturelogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

    if(!empty($_POST['email']) && !empty($_POST['password']));

$conn->close();
?>