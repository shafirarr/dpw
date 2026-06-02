<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konversi Terbilang</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; }
        .card { max-width: 400px; margin: auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #2c3e50; font-size: 1.4em; }
        .angka { font-size: 3em; color: #3498db; margin: 10px 0; font-weight: bold; }
        .terbilang { font-size: 1.5em; color: #27ae60; font-weight: bold; background: #e8f6f3; padding: 10px; border-radius: 8px; }
    </style>
</head>
<body>

<div class="card">
    <h1>Konversi Angka ke Terbilang</h1>

    <?php
    $angka = 9;
    echo "<div class='angka'>$angka</div>";

    function konversi($n) {
        switch ($n) {
            case 1: return "Satu";
            case 2: return "Dua";
            case 3: return "Tiga";
            case 4: return "Empat";
            case 5: return "Lima";
            case 6: return "Enam";
            case 7: return "Tujuh";
            case 8: return "Delapan";
            case 9: return "Sembilan";
            default: return "Angka tidak valid";
        }
    }

    echo "<div class='terbilang'>" . konversi($angka) . "</div>";
    ?>
</div>

</body>
</html>