<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Nilai Siswa</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 20px; }
        .card { max-width: 600px; margin: auto; background: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #2c3e50; color: white; }
        .highlight { color: #e67e22; font-weight: bold; }
    </style>
</head>
<body>

<div class="card">
    <h2>Data Nilai Akhir Kelas</h2>
    <table>
        <tr><th>No</th><th>Nama</th><th>Poin</th></tr>
        <?php
        $siswa = [
            ["no" => 1, "poin" => 75, "nama" => "Adi"],
            ["no" => 2, "poin" => 80, "nama" => "Joni"],
            ["no" => 3, "poin" => 65, "nama" => "Jihan"],
            ["no" => 4, "poin" => 70, "nama" => "Aya"],
            ["no" => 5, "poin" => 85, "nama" => "Ita"],
            ["no" => 6, "poin" => 90, "nama" => "Budi"],
            ["no" => 7, "poin" => 95, "nama" => "Tini"],
            ["no" => 8, "poin" => 65, "nama" => "Sari"]
        ];

        foreach ($siswa as $s) {
            echo "<tr><td>{$s['no']}</td><td>{$s['nama']}</td><td>{$s['poin']}</td></tr>";
        }
        ?>
    </table>

    <hr>
    <h3>Hasil Analisis:</h3>
    <?php
    // a) Poin nomor 5
    echo "<p>a) Poin siswa no 5: <strong>" . $siswa[4]['nama'] . " (" . $siswa[4]['poin'] . ")</strong></p>";

    // Fungsi untuk mencari siswa berdasarkan poin
    function cariSiswa($data, $poinDicari) {
        $hasil = array_filter($data, fn($s) => $s['poin'] == $poinDicari);
        if (empty($hasil)) return "Tidak ada siswa dengan poin $poinDicari.";
        
        $output = "Siswa dengan poin $poinDicari: ";
        foreach($hasil as $s) $output .= "<strong>" . $s['nama'] . "</strong> ";
        return $output;
    }

    echo "<p>b) " . cariSiswa($siswa, 90) . "</p>";
    echo "<p>c) " . cariSiswa($siswa, 100) . "</p>";
    ?>
</div>

</body>
</html>