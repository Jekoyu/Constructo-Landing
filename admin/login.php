<?php
session_start();
require_once '../crud.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $crud = new CRUD();
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = $crud->read('users', ['username' => $username]);

    if ($user && password_verify($password, $user[0]['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        $message = 'Username atau password salah.';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <style>
        body { font-family: Arial; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f4f4f4; }
        form { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input { display: block; margin-bottom: 1rem; padding: 0.5rem; width: 100%; }
        .error { color: red; margin-bottom: 1rem; }
    </style>
</head>
<body>
    <form method="post">
        <h2>Login Admin</h2>
        <?php if ($message): ?>
            <div class="error"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>
        <input type="text" name="username" placeholder="Username" required autofocus>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
