<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM t_matakuliah WHERE id='$id'";
$result = mysqli_query($link, $query);

if(!$result){
    die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
}

$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Kuliah</title>
</head>
<body>

<h2>Edit Mata Kuliah</h2>

<form method="POST" action="proses_editmatakuliah.php">

    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

    <p>
        Kode MK <br>
        <input type="text" name="kode_mk"
        value="<?php echo $data['kode_mk']; ?>">
    </p>

    <p>
        Nama Mata Kuliah <br>
        <input type="text" name="nama_mk"
        value="<?php echo $data['nama_mk']; ?>">
    </p>

    <p>
        SKS <br>
        <input type="number" name="sks"
        value="<?php echo $data['sks']; ?>">
    </p>

    <button type="submit" name="update">Update</button>

</form>

</body>
</html>