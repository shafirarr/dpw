<?php
include("koneksi.php");

// Hitung jumlah data untuk statistik
$countDosen = mysqli_fetch_assoc(
    mysqli_query($link, "SELECT COUNT(*) as total FROM tbl_dosen")
)['total'];

$countMhs = mysqli_fetch_assoc(
    mysqli_query($link, "SELECT COUNT(*) as total FROM tbl_mahasiswa")
)['total'];

// SUDAH DIPERBAIKI: Mengambil data dari tabel asli 't_matakuliah'
$countMK = mysqli_fetch_assoc(
    mysqli_query($link, "SELECT COUNT(*) as total FROM t_matakuliah")
)['total'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <div class="brand">SIA <span>| Sistem Informasi Akademik</span></div>

        <ul class="nav-links">
            <li><a href="index.php" class="active">🏠 Dashboard</a></li>
            <li><a href="viewdosen.php">👨‍🏫 Dosen</a></li>
            <li><a href="viewmahasiswa.php">🎓 Mahasiswa</a></li>
            <li><a href="viewmatakuliah.php">📚 Mata Kuliah</a></li>
        </ul>
    </nav>

    <div class="page-header fade-in">
        <h1>Dashboard</h1>
        <p>Selamat datang di Sistem Informasi Akademik</p>
    </div>

    <div class="stats-grid fade-in">

        <a href="viewdosen.php" class="stat-card dosen">
            <div class="stat-icon">👨‍🏫</div>
            <div class="stat-value"><?php echo $countDosen; ?></div>
            <div class="stat-label">Total Dosen</div>
        </a>

        <a href="viewmahasiswa.php" class="stat-card mahasiswa">
            <div class="stat-icon">🎓</div>
            <div class="stat-value"><?php echo $countMhs; ?></div>
            <div class="stat-label">Total Mahasiswa</div>
        </a>

        <a href="viewmatakuliah.php" class="stat-card matakuliah">
            <div class="stat-icon">📚</div>
            <div class="stat-value"><?php echo $countMK; ?></div>
            <div class="stat-label">Total Mata Kuliah</div>
        </a>

    </div>

    <div class="footer">
        &copy; <?php echo date('Y'); ?> Sistem Informasi Akademik — Modul 11 PHP Database (CRUD)
    </div>

</body>
</html>