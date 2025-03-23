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

header('Location: journal.php?success=1');

$stmt = $conn->prepare("INSERT INTO leaveuscomment (fname,email,comments) VALUES (?, ?,?)");
$stmt->bind_param("sss", $name, $email,$comment);

$name = $_POST["name"];

$email =$_POST["email"];

$comment=$_POST["comment"];
$stmt->execute();



$stmt->close();

$conn->close();
?>