<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, name, password FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            header("Location: dashboard.php"); // Redirect ke halaman dashboard setelah login
            exit();
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Email tidak ditemukan.";
    }
}

$conn->close();
?>
