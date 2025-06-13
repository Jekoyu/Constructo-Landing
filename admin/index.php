<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Selamat datang, <?= htmlspecialchars($_SESSION['admin_username']) ?></h1>
    <p>Ini adalah halaman admin yang dilindungi.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
