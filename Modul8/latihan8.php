<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 8 - Array 2 Dimensi</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 20px; }
        .card { max-width: 500px; margin: auto; background: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; border-bottom: 2px solid #27ae60; padding-bottom: 10px; }
        .kelas-box { margin-bottom: 20px; }
        span.badge { background: #3498db; color: white; padding: 3px 10px; border-radius: 5px; font-weight: bold; }
        ul { list-style-type: none; padding: 0; }
        li { padding: 5px 0; border-bottom: 1px solid #eee; }
    </style>
</head>
<body>

<div class="card">
    <h2>Daftar Siswa Per Kelas</h2>

    <?php
    $array = [
        "1C" => ["Udin", "Ismail", "Adi"],
        "1D" => ["Lukman", "Fajri", "Mahmud"]
    ];

    foreach ($array as $namaKelas => $daftarSiswa) {
        echo "<div class='kelas-box'>";
        echo "<h3>Kelas <span class='badge'>$namaKelas</span></h3>";
        echo "<ul>";
        foreach ($daftarSiswa as $siswa) {
            echo "<li>$siswa</li>";
        }
        echo "</ul>";
        echo "</div>";
    }
    ?>
    
    <hr>
    <p><strong>Akses Cepat:</strong> Fajri ada di kelas 1D (index 1).</p>
</div>

</body>
</html>