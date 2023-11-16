<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit;
}

include("connection.php");

if (isset($_POST['Signup'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = $_POST['password'];

    // Check if the username already exists in the database
    $check_username_query = "SELECT * FROM admin WHERE username = '$username'";
    $check_username_result = mysqli_query($connection, $check_username_query);

    if (mysqli_num_rows($check_username_result) > 0) {
        // Username already exists
    } else {
        // Insert new user into the database
        $insert_query = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
        mysqli_query($connection, $insert_query);
    }
}
?>