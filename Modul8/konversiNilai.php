<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konversi Nilai</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; }
        .card { max-width: 350px; margin: auto; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 20px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #2c3e50; font-size: 1.4em; margin-bottom: 20px; }
        .angka-box { font-size: 2.5em; font-weight: bold; color: #34495e; }
        .huruf-box { font-size: 4em; font-weight: bold; margin: 15px 0; padding: 10px; border-radius: 10px; }
        
        /* Warna dinamis berdasarkan nilai */
        .A { color: #27ae60; background: #e8f6f3; }
        .B { color: #2980b9; background: #ebf5fb; }
        .C { color: #f39c12; background: #fef9e7; }
        .D { color: #e67e22; background: #fdebd0; }
        .E { color: #c0392b; background: #f9ebea; }
    </style>
</head>
<body>

<div class="card">
    <h1>Hasil Konversi Nilai</h1>

    <?php
    $nilai = 50;

    // Logika menentukan huruf
    if ($nilai >= 85) { $huruf = "A"; }
    elseif ($nilai >= 75) { $huruf = "B"; }
    elseif ($nilai >= 65) { $huruf = "C"; }
    elseif ($nilai >= 50) { $huruf = "D"; }
    else { $huruf = "E"; }

    echo "<div class='angka-box'>Nilai: $nilai</div>";
    echo "<div class='huruf-box $huruf'>$huruf</div>";
    ?>
    
    <p>Status: Konversi Selesai</p>
</div>

</body>
</html>