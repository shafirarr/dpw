<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Variabel & Array</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; }
        .card { max-width: 300px; margin: auto; background: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; font-size: 1.4em; text-align: center; }
        .day-list { list-style: none; padding: 0; }
        .day-item { 
            padding: 8px 15px; 
            margin: 5px 0; 
            background: #3498db; 
            color: white; 
            border-radius: 5px; 
            text-align: center; 
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Daftar Hari</h1>
    <ul class="day-list">
        <?php
        // Menggunakan Array agar lebih efisien daripada $hari1, $hari2, dst
        $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
        
        foreach ($hari as $namaHari) {
            echo "<li class='day-item'>$namaHari</li>";
        }
        ?>
    </ul>
</div>

</body>
</html>