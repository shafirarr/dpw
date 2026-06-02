<?php
session_start();
// Proteksi halaman: jika belum login, tendang balik ke login.php
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; display: flex; justify-content: center; }
        .dashboard-card { background: white; padding: 40px; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); width: 100%; max-width: 500px; text-align: center; }
        .logout-btn { display: inline-block; margin-top: 20px; padding: 12px 25px; background: #e74c3c; color: white; text-decoration: none; border-radius: 8px; font-weight: bold; }
    </style>
</head>
<body>
<div class="dashboard-card">
    <h2>Selamat Datang!</h2>
    <p>Halo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</p>
    <p>Nama: <?php echo htmlspecialchars($_SESSION["nama_lengkap"]); ?></p>
    <a href="logout.php" class="logout-btn">Log Out</a>
</div>
</body>
</html>