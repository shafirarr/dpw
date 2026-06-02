<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Perulangan</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; }
        .card { max-width: 300px; margin: auto; background: white; padding: 20px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #2c3e50; }
        ul { list-style: none; padding: 0; }
        li { 
            background: #e8f6f3; 
            margin: 5px 0; 
            padding: 10px; 
            border-radius: 8px; 
            text-align: center; 
            font-weight: bold; 
            color: #16a085; 
            transition: 0.3s;
        }
        li:hover { background: #1abc9c; color: white; cursor: pointer; }
    </style>
</head>
<body>

<div class="card">
    <h2>Data Perulangan</h2>
    <ul>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>Data ke-$i</li>";
        }
        ?>
    </ul>
</div>

</body>
</html>