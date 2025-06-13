<?php
session_start();
require_once '../crud.php';
if(isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']) {
    header('Location: index.php');
    exit;
}
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
        }
        .login-card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        .login-header {
            background-color: #ffffff;
            padding: 2rem 1.5rem 1rem;
            text-align: center;
            border-bottom: 1px solid #e9ecef;
        }
        .login-body {
            padding: 2rem;
            background-color: #ffffff;
        }
        .login-title {
            color: #495057;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .login-subtitle {
            color: #6c757d;
            font-size: 0.875rem;
            margin-bottom: 1.5rem;
        }
        .form-control {
            height: 46px;
            border-radius: 4px;
            border: 1px solid #e0e0e0;
        }
        .form-control:focus {
            border-color: #4e73df;
            box-shadow: none;
        }
        .input-group-text {
            background-color: #f8f9fa;
            border: 1px solid #e0e0e0;
        }
        .btn-login {
            background-color: #4e73df;
            border: none;
            height: 46px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .btn-login:hover {
            background-color: #3a5ccc;
        }
        .alert {
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="login-card">
                <div class="login-header">
                    <h3 class="login-title"></i>Login</h3>
                    <p class="login-subtitle">Silakan masuk dengan akun Anda</p>
                </div>
                <div class="login-body">
                    <?php if ($message): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= htmlspecialchars($message) ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    
                    <form method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required autofocus>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-login w-100 mb-3">
                            <i class="fas fa-sign-in-alt me-2"></i>Masuk
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>