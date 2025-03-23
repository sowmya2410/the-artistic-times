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
echo "Connected successfully";

header('Location: popup.html');

$stmt = $conn->prepare("INSERT INTO newsltter (name,email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);

$name = $_POST["name"];

$email =$_POST["email"];
$stmt->execute();

echo "New records created successfully";

$stmt->close();

$conn->close();
?>
?>