<?php
    // Check If form submitted, insert form data into users table.
        $id = $_POST['ID'];
        $pendapatan = $_POST['PENDAPATAN'];
        $jumlah_anggota_keluarga = $_POST['JUMLAH_ANGGOTA_KELUARGA'];
        $pekerjaan_kepala_keluarga = $_POST['PEKERJAAN_KEPALA_KELUARGA'];

        // include database connection file
        include_once("../config.php");

        // Insert user data into table
        mysqli_query($conn, "UPDATE indikator SET PENDAPATAN = '$pendapatan', JUMLAH_ANGGOTA_KELUARGA = '$jumlah_anggota_keluarga', PEKERJAAN_KEPALA_KELUARGA = '$pekerjaan_kepala_keluarga' WHERE ID = '$id'");

        // Show message when user added
        header('Refresh: 0.000000001; URL = ../../indikator/index.php');
?>