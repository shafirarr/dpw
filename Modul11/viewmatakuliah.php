<?php
// Memanggil file koneksi asli milikmu
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik - Mata Kuliah</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Gaya Dasar & Latar Belakang sesuai Dashboard */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #e8f4fd; /* Warna biru muda lembut khas dashboard */
            color: #333;
            padding: 30px 20px;
        }

        /* Container Putih Utama */
        .main-container {
            max-width: 1100px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 20px; /* Sudut melengkung modern */
            box-shadow: 0 10px 30px rgba(0, 102, 204, 0.05);
        }

        h1 {
            text-align: center;
            color: #1e3a8a;
            font-weight: 700;
            margin-bottom: 25px;
            font-size: 26px;
        }

        /* Navigasi Bar Menu Atas yang Sinkron dengan Dashboard */
        .navbar-sia {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            background: #f8fafc;
            padding: 10px;
            border-radius: 12px;
            margin-bottom: 30px;
            border: 1px solid #e2e8f0;
        }

        .navbar-sia a {
            text-decoration: none;
            color: #64748b;
            font-weight: 500;
            padding: 8px 18px;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .navbar-sia a:hover {
            color: #0284c7;
            background: #f0f7ff;
        }

        .navbar-sia a.active {
            background: #e0f2fe;
            color: #0284c7;
            font-weight: 600;
        }

        /* Baris Aksi: Tombol Tambah & Kolom Cari */
        .action-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .btn-tambah a {
            text-decoration: none;
            background: #22c55e;
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 4px 12px rgba(34, 197, 94, 0.2);
            transition: all 0.2s;
        }

        .btn-tambah a:hover {
            background: #16a34a;
            transform: translateY(-1px);
        }

        /* Desain Kolom Cari Minimalis */
        .search-wrapper form {
            display: flex;
            gap: 6px;
            align-items: center;
        }

        .search-wrapper input[type="text"] {
            padding: 10px 16px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            font-size: 14px;
            outline: none;
            width: 240px;
            transition: all 0.2s;
        }

        .search-wrapper input[type="text"]:focus {
            border-color: #38bdf8;
            box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.15);
        }

        .search-wrapper input[type="submit"] {
            background: #0284c7;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
            transition: background 0.2s;
        }

        .search-wrapper input[type="submit"]:hover {
            background: #0369a1;
        }

        .btn-clear {
            background: #ef4444;
            color: white;
            text-decoration: none;
            padding: 10px 14px;
            border-radius: 10px;
            font-size: 14px;
            transition: background 0.2s;
            margin-left: 6px;
        }

        .btn-clear:hover {
            background: #dc2626;
        }

        /* Desain Tabel Modern Mewah */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 12px;
            overflow: hidden; /* Menjaga sudut tabel tetap bulat berkelok */
            border: 1px solid #e2e8f0;
        }

        th {
            background-color: #f8fafc;
            color: #1e293b;
            padding: 16px;
            font-weight: 600;
            font-size: 14px;
            text-align: center;
            border-bottom: 2px solid #e2e8f0;
        }

        td {
            padding: 16px;
            border-bottom: 1px solid #f1f5f9;
            color: #475569;
            font-size: 14px;
            text-align: center;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:nth-child(even) {
            background-color: #fdfdfd;
        }

        tr:hover {
            background-color: #f0f7ff; /* Efek highlight biru transparan saat baris disentuh */
        }

        /* Tombol Edit & Hapus Bergaya Kapsul Modern */
        .action-link {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.2s;
        }

        .action-edit {
            background-color: #e0f2fe;
            color: #0369a1;
            margin-right: 4px;
        }

        .action-edit:hover {
            background-color: #0284c7;
            color: white;
        }

        .action-hapus {
            background-color: #fee2e2;
            color: #b91c1c;
        }

        .action-hapus:hover {
            background-color: #dc2626;
            color: white;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <h1>Tabel Mata Kuliah</h1>
        
        <div class="navbar-sia">
            <a href="index.php">Dashboard</a>
            <a href="viewdosen.php">Data Dosen</a>
            <a href="viewmahasiswa.php">Data Mahasiswa</a>
            <a href="viewmatakuliah.php" class="active">Data Mata Kuliah</a>
        </div>

        <div class="action-wrapper">
            <div class="btn-tambah">
                <a href="inputmatakuliah.php">+ Input Mata Kuliah Baru</a>
            </div>

            <div class="search-wrapper">
                <form method="GET" action="viewmatakuliah.php">
                    <input type="text" 
                           name="cari" 
                           placeholder="Cari nama mata kuliah..." 
                           value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
                    
                    <input type="submit" value="Cari">
                    
                    <?php if(isset($_GET['cari'])): ?>
                        <a href="viewmatakuliah.php" class="btn-clear">Reset</a>
                    <?php endif; ?>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th style="width: 60px;">No</th>
                        <th>Kode MK</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th style="width: 180px;">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // MENGGUNAKAN KUERI ASLI KAMU (Mengarah ke t_matakuliah, ordered by id)
                    if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        $query = "SELECT * FROM t_matakuliah WHERE nama_mk LIKE '%$cari%' ORDER BY id ASC";
                    } else {
                        $query = "SELECT * FROM t_matakuliah ORDER BY id ASC";
                    }

                    $result = mysqli_query($link, $query);

                    if(!$result){
                        die ("Query Error : ".mysqli_errno($link)." - ".mysqli_error($link));
                    }

                    $no = 1;

                    // LOOP DATA ASLI KAMU TANPA MENGUBAH VALUE/PARAMETER LINK BUTTON
                    while($data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$no++."</td>";
                        echo "<td>".$data['kode_mk']."</td>";
                        echo "<td><b>".$data['nama_mk']."</b></td>";
                        echo "<td>".$data['sks']." SKS</td>";
                        echo "<td>
                                <a href='editmatakuliah.php?id=".$data['id']."' class='action-link action-edit'>Edit</a>
                                <a href='hapusmatakuliah.php?id=".$data['id']."' onclick=\"return confirm('Yakin ingin menghapus data ini?')\" class='action-link action-hapus'>Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>