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

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $select_user = "SELECT * FROM korisnici WHERE username = '$username' AND password = '$password'";
    $run_user = mysqli_query($conn, $select_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user > 0){
        $_SESSION['username'] = $username;
        header("Location: met.html");
    }else {
        echo "<script>alert('Email or password is not correct, try again!')</script>";
        header("Location: index.php");
    }
}
?>