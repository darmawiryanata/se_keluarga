<?php
    // Check If form submitted, insert form data into users table.
        $nik = $_POST['NIK'];
        $nikbaru = $_POST['NIKBARU'];
        $nama_kepala_keluarga = $_POST['NAMA_KEPALA_KELUARGA'];

        // include database connection file
        include_once("../config.php");

        // Insert user data into table
        mysqli_query($conn, "UPDATE keluarga SET NIK = '$nikbaru', NAMA_KEPALA_KELUARGA = '$nama_kepala_keluarga' WHERE NIK = '$nik'");

        // Show message when user added
        header('Refresh: 0.000000001; URL = ../../keluarga/index.php');
?>