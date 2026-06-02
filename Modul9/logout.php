<?php
session_start();

// Mengosongkan seluruh variabel session
session_unset();

// Menghancurkan session di server
session_destroy();

// Pindahkan kembali ke halaman login utama
header("Location: login_session.php");
exit();
?>