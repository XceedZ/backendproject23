<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$user_name = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en" class="font-body overflow-x-hidden scroll-smooth">
<head>
    <!-- ... -->
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-fit bg-custom2 p-20 rounded-l-3xl shadow-md" data-tilt>
        <h2 class="text-2xl font-semibold mb-6 text-custom">Welcome, <?php echo $user_name; ?>!</h2>
        <!-- Tampilkan halaman dashboard sesuai kebutuhan Anda -->
        <!-- ... -->
    </div>
    <!-- ... -->
</body>
</html>
