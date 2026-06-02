<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4 - Kondisi PHP</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; }
        .card { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 400px; margin: auto; text-align: center; }
        h1 { color: #2c3e50; font-size: 1.5em; margin-bottom: 20px; }
        .nilai { font-size: 2em; font-weight: bold; color: #34495e; margin: 10px 0; }
        .status { padding: 10px 20px; border-radius: 5px; color: white; font-weight: bold; display: inline-block; margin-top: 15px; }
        .lulus { background-color: #27ae60; }
        .gagal { background-color: #c0392b; }
    </style>
</head>
<body>

<div class="card">
    <h1>Laporan Kelulusan</h1>
    
    <?php
    $nilai = 93;

    echo "<p>Nilai Anda saat ini:</p>";
    echo "<div class='nilai'>$nilai</div>";

    if ($nilai >= 75) {
        echo "<span class='status lulus'>SELAMAT: LULUS</span>";
    } else {
        echo "<span class='status gagal'>MAAF: TIDAK LULUS</span>";
    }
    ?>
</div>

</body>
</html>