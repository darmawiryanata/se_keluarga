<?php
    include '../layout/head.php';
    include '../layout/header.php';
    $nomor = 1;
    // Create database connection using config file
    include '../crud/config.php';

    // Fetch all users data from database
    $result = mysqli_query($conn, "SELECT indikator.ID, keluarga.NAMA_KEPALA_KELUARGA, indikator.PENDAPATAN, indikator.JUMLAH_ANGGOTA_KELUARGA, indikator.PEKERJAAN_KEPALA_KELUARGA FROM indikator INNER JOIN keluarga ON keluarga.NIK = indikator.NIK ORDER BY indikator.NIK") or die("Gagal terhubung dengan tabel: " .mysqli_connect_error());
?>
<div class="container uper">
    <a class="tmbtambah btn btn-success" href="create.php">Tambahkan Penilaian</a>
    <table class="table table-striped">
        <thead>
            <tr class="tengah">
                <td>ID</td>
                <td>Nama Kepala Keluarga</td>
                <td>Pendapatan</td>
                <td>Jumlah Anggota Keluarga</td>
                <td>Pekerjaan Kepala Keluarga</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
                if (mysqli_num_rows($result) == 0) {
                    echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';
                }
                else {
                while($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td class="tengah"><?php $data['ID']; echo $nomor++; ?></td>
                    <td><?php echo $data['NAMA_KEPALA_KELUARGA']; ?></td>
                    <td class="tengah"><?php echo $data['PENDAPATAN']; ?></td>
                    <td class="tengah"><?php echo $data['JUMLAH_ANGGOTA_KELUARGA']; ?></td>
                    <td class="tengah"><?php echo $data['PEKERJAAN_KEPALA_KELUARGA']; ?></td>
                    <td class="tengah">
                        <a style="margin:0 5px 0 20px;" class="btn btn-primary" type="submit" href="edit.php?ID=<?php echo $data['ID']; ?>">Edit</a> 				
                    </td>
                    <td class="tengah">
                        <a style="margin:0 20px 0 5px;" class="btn btn-danger" type="submit" href="../crud/indikator/delete.php?ID=<?php echo $data['ID']; ?>">Hapus</a>	
                    </td>
                </tr>
            <?php }} ?>
        </tbody>
    </table>    
<div>
<?php include '../layout/foot.php';?>