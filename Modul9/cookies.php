<?php
// Logika tetap, namun kita tambahkan penanganan header dengan lebih aman
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["simpan"])) {
    setcookie("nama", $_POST["nama"], time() + 86400, "/");
    setcookie("email", $_POST["email"], time() + 86400, "/");
    setcookie("nim", $_POST["nim"], time() + 86400, "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_GET["hapus"])) {
    setcookie("nama", "", time() - 3600, "/");
    setcookie("email", "", time() - 3600, "/");
    setcookie("nim", "", time() - 3600, "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Identitas Cookies</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f0f2f5; padding: 40px; display: flex; justify-content: center; }
        .card { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        h2 { color: #1a73e8; text-align: center; margin-bottom: 20px; }
        input { width: 100%; padding: 12px; margin: 8px 0; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #1a73e8; color: white; border: none; border-radius: 8px; cursor: pointer; font-weight: bold; margin-top: 10px; }
        .data-item { background: #f8f9fa; padding: 10px; border-radius: 8px; margin-bottom: 10px; border-left: 4px solid #1a73e8; }
        .hapus-btn { display: block; text-align: center; margin-top: 20px; color: #d93025; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

<div class="card">
    <h2>Identitas Pengguna</h2>

    <?php if (isset($_COOKIE["nama"])): ?>
        <div class="data-item"><strong>Nama:</strong> <?php echo htmlspecialchars($_COOKIE["nama"]); ?></div>
        <div class="data-item"><strong>Email:</strong> <?php echo htmlspecialchars($_COOKIE["email"]); ?></div>
        <div class="data-item"><strong>NIM:</strong> <?php echo htmlspecialchars($_COOKIE["nim"]); ?></div>
        <a href="?hapus=1" class="hapus-btn">Hapus Identitas</a>
    <?php else: ?>
        <form method="post">
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <input type="email" name="email" placeholder="Alamat Email" required>
            <input type="text" name="nim" placeholder="Nomor Induk Mahasiswa" required>
            <button type="submit" name="simpan">Simpan Identitas</button>
        </form>
    <?php endif; ?>
</div>

</body>
</html>