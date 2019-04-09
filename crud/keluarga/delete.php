<?php
// koneksi database
include '../config.php';

// menangkap data id yang di kirim dari url
$nik = $_GET['NIK'];


// menghapus data dari database
mysqli_query($conn, "DELETE FROM keluarga where NIK='$nik'");

// mengalihkan halaman kembali ke index.php
header('Refresh: 0.000000001; URL = ../../keluarga/index.php');

?>
