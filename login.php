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
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password' ";

	$result = $conn-> query($sql);

	if ($result-> num_rows > 0) {
		echo "<script>alert ('Logged in'); window.location.href = 'home.html'; </script>";
	} else {
		echo "<script>alert ('Wrong username/password'); window.location.href = 'index.html'; </script>";
	}
}

?>