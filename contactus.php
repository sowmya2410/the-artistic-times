<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "subscribe";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

header('Location:popup2.html ');

$stmt = $conn->prepare("INSERT INTO contactus (fname,address,profession,comment) VALUES (?, ?,?,?)");
$stmt->bind_param("ssss", $name, $email,$prof,$comment);

$name = $_POST["firstname"];

$email =$_POST["mail"];
$prof=$_POST["prof"];
$comment=$_POST["comments"];
$stmt->execute();



$stmt->close();

$conn->close();
?>