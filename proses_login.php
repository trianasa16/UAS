<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $email;
    setcookie("email", $email, time() + (7 * 24 * 60 * 60), "/");
    header("Location: index.php");
} else {
    echo "Login gagal!";
}
?>