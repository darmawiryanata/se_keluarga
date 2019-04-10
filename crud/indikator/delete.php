<?php
// koneksi database
include '../config.php';

// menangkap data id yang di kirim dari url
$id = $_GET['ID'];


// menghapus data dari database
mysqli_query($conn, "DELETE FROM indikator where ID='$id'");

// mengalihkan halaman kembali ke index.php
header('Refresh: 0.000000001; URL = ../../indikator/index.php');

?>
