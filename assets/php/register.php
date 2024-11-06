<?php
session_start();
include 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Registration successful!";
        header("Location: ../../Pages/signup.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
header("Location: ../../Pages/signup.php");
exit();
?>

