<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 6 - Perulangan For</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; padding: 40px; }
        .container { max-width: 400px; margin: auto; background: white; padding: 25px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #2c3e50; margin-bottom: 20px; }
        .list-item { 
            padding: 10px; 
            border-bottom: 1px solid #eee; 
            display: flex; 
            justify-content: space-between; 
        }
        .list-item:nth-child(even) { background-color: #fcfcfc; }
        .badge { background: #3498db; color: white; padding: 2px 8px; border-radius: 10px; font-size: 0.8em; }
    </style>
</head>
<body>

<div class="container">
    <h1>Log Perulangan</h1>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<div class='list-item'>";
        echo "<span>Item Data</span>";
        echo "<span class='badge'>Perulangan ke-$i</span>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>