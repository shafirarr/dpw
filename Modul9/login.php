<?php
session_start();
// Jika sudah login, langsung lempar ke dashboard
if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit();
}

$error_pesan = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = trim($_POST["username"]);
    $pass_input = trim($_POST["password"]);

    try {
        if (empty($user_input) || empty($pass_input)) {
            throw new Exception("Username dan Password tidak boleh kosong!");
        }
        // Akun dummy
        if ($user_input === "admin" && $pass_input === "admin123") {
            $_SESSION["username"] = $user_input;
            $_SESSION["nama_lengkap"] = "Shafira Rahmaningtyas";
            header("Location: dashboard.php");
            exit();
        } else {
            throw new Exception("Username atau Password salah!");
        }
    } catch (Exception $e) {
        $error_pesan = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistem</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; display: flex; justify-content: center; }
        .login-card { background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; max-width: 350px; }
        h2 { color: #2c3e50; text-align: center; margin-bottom: 25px; }
        .error { color: #e74c3c; font-size: 0.9em; margin-bottom: 15px; text-align: center; background: #fadbd8; padding: 10px; border-radius: 5px; }
        input { width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #3498db; color: white; border: none; border-radius: 8px; cursor: pointer; font-weight: bold; }
    </style>
</head>
<body>
<div class="login-card">
    <h2>Login Akses</h2>
    <?php if ($error_pesan): ?> <div class="error"><?php echo $error_pesan; ?></div> <?php endif; ?>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">MASUK</button>
    </form>
</div>
</body>
</html>