<?php
    // Check If form submitted, insert form data into users table.
        $nik = $_POST['NIK'];
        $nama_kepala_keluarga = $_POST['NAMA_KEPALA_KELUARGA'];

        // include database connection file
        include_once("../config.php");

        // Insert user data into table
        mysqli_query($conn, "INSERT INTO keluarga VALUES('$nik','$nama_kepala_keluarga')");

        // Show message when user added
        header('Refresh: 0.000000001; URL = ../../keluarga/index.php');
?>