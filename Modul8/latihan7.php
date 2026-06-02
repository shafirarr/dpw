<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 7 - Array PHP</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 20px; }
        .container { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Array</h2>

    <?php
    // 1. Index Array
    $cars = ["Volvo", "BMW", "Toyota"];
    echo "<p><strong>Mobil Favorit:</strong> " . implode(", ", $cars) . ".</p>";

    // 2. Associative Array
    $age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
    echo "<p>Peter berumur " . $age['Peter'] . " tahun.</p>";

    // 3. Multidimensional Array (Ditampilkan dalam Tabel)
    echo "<h3>Stok Mobil</h3>";
    $cars_data = [
        ["Volvo", 22, 18], ["BMW", 15, 13], ["Saab", 5, 2], ["Land Rover", 17, 15]
    ];
    echo "<table><tr><th>Merk</th><th>Stok</th><th>Terjual</th></tr>";
    foreach ($cars_data as $c) {
        echo "<tr><td>{$c[0]}</td><td>{$c[1]}</td><td>{$c[2]}</td></tr>";
    }
    echo "</table>";

    // 4. Array Buah
    echo "<h3>Daftar Buah</h3>";
    $namaBuah = ["Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis"];
    foreach ($namaBuah as $buah) {
        echo "Saya suka " . $buah . "<br>";
    }

    // 5. Associative Array dengan Foreach
    echo "<h3>Data Umur</h3>";
    $umur = ["Nadhif"=>"29 Tahun", "Recky"=>"37 Tahun", "Navin"=>"43 Tahun"];
    $umur['Ahmad'] = "50 Tahun";
    foreach ($umur as $nama => $usia) {
        echo "Umur $nama adalah $usia<br>";
    }
    ?>
</div>

</body>
</html>