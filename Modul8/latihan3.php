<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3 - Operator PHP</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; padding: 40px; }
        .card-container { display: flex; gap: 20px; justify-content: center; }
        .card { background: white; padding: 25px; border-radius: 15px; box-shadow: 0 6px 12px rgba(0,0,0,0.1); width: 300px; }
        h2 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        .result { font-weight: bold; color: #e67e22; font-size: 1.1em; }
        .info { color: #7f8c8d; font-size: 0.9em; margin-top: 10px; }
    </style>
</head>
<body>

<h1 style="text-align: center;">Operator Increment PHP</h1>

<div class="card-container">
    <div class="card">
        <h2>Post Increment</h2>
        <?php
        $x = 5;
        echo "Nilai awal: $x <br>";
        echo "Hasil (x++): <span class='result'>" . $x++ . "</span><br>";
        echo "Nilai akhir: <span class='result'>" . $x . "</span>";
        ?>
        <p class="info">(Nilai ditampilkan dulu baru ditambah)</p>
    </div>

    <div class="card">
        <h2>Pre Increment</h2>
        <?php
        $x = 5;
        echo "Nilai awal: $x <br>";
        echo "Hasil (++x): <span class='result'>" . ++$x . "</span><br>";
        echo "Nilai akhir: <span class='result'>" . $x . "</span>";
        ?>
        <p class="info">(Nilai ditambah dulu baru ditampilkan)</p>
    </div>
</div>

</body>
</html>