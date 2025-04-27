<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn-> connect_error) {
	die ("Connection failed: " . $conn -> connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO account (email, phone, username, password) VALUES ('$email', '$phone', '$username', '$password')";

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert ('Registered'); window.location.href = 'index.html'; </script>";
	} else {
		echo "Error: " . $sql . "<br>" . $connect_error;
	}
}

?>