<?php
    include '../layout/head.php';
    include '../layout/header.php';
    $nomor = 1;
    // Create database connection using config file
    include '../crud/config.php';

    // Fetch all users data from database
    $result = mysqli_query($conn, "SELECT * FROM keluarga ORDER BY nik") or die("Gagal terhubung dengan database: " . mysqli_connect_error());
?>
<div class="container uper">
    <a class="tmbtambah btn btn-success" href="create.php">Tambah Data Keluarga</a>
    <table class="table table-striped">
        <thead>
            <tr class="tengah">
                <td>ID</td>
                <td>NIK</td>
                <td>Nama Kepala Keluarga</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
                if (mysqli_num_rows($result) == 0) {
                    echo '<tr><td colspan="4"><center>Data Kosong!!!</center></td></tr>';
                }
                else {
                while($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td class="tengah"><?php echo $nomor++; ?></td>
                    <td class="tengah"><?php echo $data['NIK']; ?></td>
                    <td><?php echo $data['NAMA_KEPALA_KELUARGA']; ?></td>
                    <td class="tengah">
                        <a style="margin:0 5px 0 20px;" class="btn btn-primary" type="submit" href="edit.php?NIK=<?php echo $data['NIK']; ?>">Ubah</a> 				
                    </td>
                    <td class="tengah">
                        <a style="margin:0 20px 0 5px;" class="btn btn-danger" type="submit" href="../crud/keluarga/delete.php?NIK=<?php echo $data['NIK']; ?>">Hapus</a>	
                    </td>
                </tr>
            <?php }} ?>
        </tbody>
    </table>    
<div>
<?php include '../layout/foot.php';?>