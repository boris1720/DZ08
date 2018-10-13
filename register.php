<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dz08";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Konekcija ima grešku: " . $conn->connect_error);
}

session_start();

$username = isset($_POST["username"]) ? $_POST["username"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO korisnici (username, email, password) VALUES ('$username','$email', '$password')";
$conn->query($sql);
$conn->close();


header("Location: index.php")


?>
