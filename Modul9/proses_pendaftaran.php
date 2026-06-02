<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; display: flex; justify-content: center; }
        .result-card { background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; max-width: 500px; }
        h2 { color: #2c3e50; margin-bottom: 20px; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        .data-row { margin: 15px 0; padding-bottom: 5px; border-bottom: 1px solid #eee; }
        .label { font-weight: bold; color: #7f8c8d; display: block; font-size: 0.9em; }
        .value { color: #2c3e50; font-size: 1.1em; }
        .btn-back { display: block; text-align: center; margin-top: 30px; color: #3498db; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

<div class="result-card">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama'])) {
    // Fungsi pembantu agar kode lebih bersih
    function displayRow($label, $value) {
        echo "<div class='data-row'><span class='label'>$label</span><span class='value'>" . htmlspecialchars($value) . "</span></div>";
    }

    echo "<h2>Data Terdaftar</h2>";
    displayRow("Nama Lengkap", $_POST["nama"]);
    displayRow("NIM", $_POST["nim"]);
    displayRow("Email", $_POST["email"]);
    displayRow("Tempat, Tanggal Lahir", $_POST["tempat"] . ", " . $_POST["ttl"]);
    displayRow("Alamat", $_POST["alamat"]);
    displayRow("Jenis Kelamin", $_POST["gender"]);
    echo "<a href='form_pendaftaran.html' class='btn-back'>&larr; Kembali ke Form</a>";

} else {
    echo "<h2>Akses Ditolak!</h2>";
    echo "<p>Silakan isi <a href='form_pendaftaran.html'>Form Pendaftaran</a> terlebih dahulu.</p>";
}
?>
</div>

</body>
</html>