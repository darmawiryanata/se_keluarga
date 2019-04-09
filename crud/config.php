<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "keluarga";

    $conn = mysqli_connect($server, $user, $password, $nama_database) or die("Gagal terhubung dengan database: " . mysqli_connect_error());
?>