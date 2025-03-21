<?php
session_start(); // Start the session
require '../config.php';

if (isset($_POST['submit'])) {
    $email = $_POST["email"]; // Assuming the email input field name is "email"
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM user_details WHERE email= '$email' "); // Changed to email
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: ../Home/index.html");
            exit(); // Make sure to exit after redirecting
        } else {
            $_SESSION["error"] = "Wrong password";
            header("Location: login.html");
            exit();
        }
    } else {
        $_SESSION["error"] = "Email not found"; // Changed to Email not found
        header("Location: login.html");
        exit();
    }
}
?>
