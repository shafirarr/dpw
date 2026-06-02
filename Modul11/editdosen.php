<?php
// Memanggil file koneksi.php untuk membuat koneksi [cite: 303]
include 'koneksi.php';

// Mengecek apakah di URL ada nilai GET id_dosen
if (isset($_GET['id_dosen'])) {
    // Ambil nilai id_dosen dari URL dan disimpan dalam variabel $id
    $id = $_GET['id_dosen'];

    // Menampilkan data dosen dari database yang mempunyai id_dosen = $id
    $query  = "SELECT * FROM tbl_dosen WHERE id_dosen = '$id'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    // Mengambil data dari database dan membuat variabel untuk menampung data [cite: 324]
    $data       = mysqli_fetch_assoc($result);
    $id_dosen   = $data['id_dosen'];
    $nama_dosen = $data['nama_dosen'];
    $no_hp      = $data['no_hp'];
} else {
    // Apabila tidak ada data GET id, akan di-redirect ke viewdosen.php [cite: 339]
    header("location:viewdosen.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Dosen</title>
    <style>
        h1 { text-align: center; }
        .container { width: 400px; margin: auto; }
    </style>
</head>
<body>
    <h1>Edit Data</h1>
    <div class="container">
        <form id="form_dosen" action="proses_editdosen.php" method="post">
            <fieldset>
                <legend>Edit Data Dosen</legend>
                <p>
                    <label for="id_dosen">ID: </label>
                    <input type="hidden" name="id_dosen" value="<?php echo $id_dosen; ?>">
                    <input type="text" name="idDosenDisabled" id="idDosenDisabled" value="<?php echo $id_dosen; ?>" disabled>
                </p>
                <p>
                    <label for="nama_dosen">Nama Dosen: </label>
                    <input type="text" name="nama_dosen" id="nama_dosen" value="<?php echo $nama_dosen; ?>" required>
                </p>
                <p>
                    <label for="no_hp">No HP: </label>
                    <input type="text" name="no_hp" id="no_hp" value="<?php echo $no_hp; ?>" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
                <a href="viewdosen.php">Batal</a>
            </p>
        </form>
    </div>
</body>
</html>