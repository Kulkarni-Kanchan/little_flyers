<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "little_flyers";

// Create connection using mysqli object-oriented approach
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    // Check if the email or mobile number already exists in the database
    $duplicate = mysqli_query($conn, "SELECT * FROM user_details WHERE email = '$email' OR number = '$number'");

    if (mysqli_num_rows($duplicate) > 0) {
        // Display an alert if the email or mobile number already exists
        echo "<script>alert('Email or mobile number already exists. Please try again.');</script>";
    } else {
        // Insert data into the database if the email and mobile number do not exist
        $sql = "INSERT INTO user_details (uname, email, number, password, address) 
                VALUES ('$uname', '$email', '$number', '$password', '$address')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully');</script>";
            // Redirect to the login page
            header('Location: ../Login/login.html');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close connection
$conn->close();
?>
