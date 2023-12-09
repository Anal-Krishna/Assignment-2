<?php
include_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Validate and sanitize input

    // Insert into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $conn = 1;
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../pages/login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>