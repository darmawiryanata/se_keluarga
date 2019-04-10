<?php
    // Check If form submitted, insert form data into users table.
        $nik = $_POST['NIK'];
        $pendapatan = $_POST['PENDAPATAN'];
        $jumlah_anggota_keluarga = $_POST['JUMLAH_ANGGOTA_KELUARGA'];
        $pekerjaan_kepala_keluarga = $_POST['PEKERJAAN_KEPALA_KELUARGA'];

        // include database connection file
        include_once("../config.php");

        // Insert user data into table
        mysqli_query($conn, "INSERT INTO indikator (NIK, PENDAPATAN, JUMLAH_ANGGOTA_KELUARGA, PEKERJAAN_KEPALA_KELUARGA) VALUES('$nik', '$pendapatan', '$jumlah_anggota_keluarga', '$pekerjaan_kepala_keluarga')");

        // Show message when user added
        header('Refresh: 0.000000001; URL = ../../indikator/index.php');
?>