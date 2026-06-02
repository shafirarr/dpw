<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 5 - Cek Bilangan</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #eef2f3; padding: 40px; }
        .card { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 20px rgba(0,0,0,0.1); max-width: 350px; margin: auto; text-align: center; }
        h1 { color: #34495e; font-size: 1.4em; }
        .angka-box { font-size: 3em; color: #2980b9; margin: 20px 0; font-weight: bold; }
        .hasil { font-size: 1.2em; padding: 10px; border-radius: 8px; color: white; font-weight: bold; }
        .positif { background-color: #27ae60; }
        .negatif { background-color: #c0392b; }
        .nol { background-color: #7f8c8d; }
    </style>
</head>
<body>

<div class="card">
    <h1>Analisis Bilangan</h1>
    
    <?php
    $angka = 14;
    echo "<div class='angka-box'>$angka</div>";

    // Menggunakan logika if-elseif untuk menentukan jenis bilangan
    if ($angka > 0) {
        echo "<div class='hasil positif'>Bilangan Positif</div>";
    } elseif ($angka < 0) {
        echo "<div class='hasil negatif'>Bilangan Negatif</div>";
    } else {
        echo "<div class='hasil nol'>Bilangan Nol</div>";
    }
    ?>
</div>

</body>
</html>