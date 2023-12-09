<?php
include_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate and sanitize input

    // Check user credentials
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $conn = 1;
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Successful login
            session_start();
            $_SESSION['username'] = $username;
            header("Location:dashboard.php");
            exit();
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found";
    }
}

mysqli_close($conn);
?>