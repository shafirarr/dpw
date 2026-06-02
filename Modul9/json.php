<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konversi Array ke JSON</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; }
        .container { max-width: 900px; margin: auto; display: flex; gap: 20px; }
        .box { flex: 1; background: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #34495e; color: white; }
        pre { background: #282c34; color: #61dafb; padding: 15px; border-radius: 10px; overflow-x: auto; font-size: 0.9em; }
    </style>
</head>
<body>

    <h2>Konversi Array PHP ke Format JSON</h2>

    <div class="container">
        <div class="box">
            <h3>Data Array PHP</h3>
            <table>
                <tr><th>Nama</th><th>Umur</th></tr>
                <?php
                $data_mahasiswa = [
                    ["nama" => "Shafira", "umur" => 19], ["nama" => "Afi", "umur" => 19],
                    ["nama" => "Ayu", "umur" => 21], ["nama" => "Faizal", "umur" => 18],
                    ["nama" => "Naufal", "umur" => 22], ["nama" => "Anggita", "umur" => 20],
                    ["nama" => "Dinda", "umur" => 19], ["nama" => "Rahma", "umur" => 21],
                    ["nama" => "Arkan", "umur" => 20], ["nama" => "Farid", "umur" => 19],
                    ["nama" => "Arinda", "umur" => 22], ["nama" => "Nadhif", "umur" => 20],
                    ["nama" => "Mayra", "umur" => 21], ["nama" => "Angga", "umur" => 23],
                    ["nama" => "Michelle", "umur" => 19]
                ];
                foreach ($data_mahasiswa as $m) {
                    echo "<tr><td>{$m['nama']}</td><td>{$m['umur']}</td></tr>";
                }
                ?>
            </table>
        </div>

        <div class="box">
            <h3>Hasil Format JSON</h3>
            <pre><?php echo json_encode($data_mahasiswa, JSON_PRETTY_PRINT); ?></pre>
        </div>
    </div>

</body>
</html>