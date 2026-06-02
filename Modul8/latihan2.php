<?php
// Variabel dalam PHP [cite: 39]
$txt = "Selamat datang";
$txt2 = "Politeknik Negeri Madiun";
$x = 5;
$y = 10.5;

// PHP Konstanta [cite: 51]
define("NAMA", "Shafira Rahmaningtyas");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Variabel & Konstanta</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f9; padding: 20px; }
        .card { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 300px; margin: auto; }
        h2 { color: #333; }
        .highlight { color: #007bff; font-weight: bold; }
    </style>
</head>
<body>

<div class="card">
    <h2>Data Variabel</h2>
    <p>Pesan: <span class="highlight"><?php echo $txt . " di " . $txt2; ?></span></p>
    <p>Nilai X: <?php echo $x; ?></p>
    <p>Nilai Y: <?php echo $y; ?></p>
    <p>Hasil (X + Y): <?php echo $x + $y; ?></p>
    <hr>
    <p>Konstanta Nama: <br> <strong><?php echo NAMA; ?></strong></p>
</div>

</body>
</html>