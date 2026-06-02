<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 10 - Fungsi PHP</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; padding: 40px; }
        .card { max-width: 400px; margin: auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; border-bottom: 2px solid #9b59b6; padding-bottom: 10px; }
        .output { background: #fdf2f9; border-left: 5px solid #9b59b6; padding: 15px; margin: 10px 0; font-family: monospace; }
        .highlight { color: #9b59b6; font-weight: bold; }
    </style>
</head>
<body>

<div class="card">
    <h2>Eksperimen Fungsi</h2>

    <?php
    // 1. Fungsi Sapaan
    function writeMsg($nama) {
        echo "<div class='output'>Pesan: <span class='highlight'>Selamat datang, $nama!</span></div>";
    }
    writeMsg("Shafira");

    // 2. Fungsi Matematika (Return Value)
    function tambah(int $angka1, int $angka2) {
        return $angka1 + $angka2;
    }
    
    $hasil = tambah(5, 5);
    echo "<div class='output'>Hasil penjumlahan 5 + 5 = <span class='highlight'>$hasil</span></div>";
    ?>
</div>

</body>
</html>