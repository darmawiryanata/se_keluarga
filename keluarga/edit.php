<?php
    include('../layout/head.php');
    include('../layout/header.php');
?>
<?php 
    include "../crud/config.php";
    $nik = $_GET['NIK'];
    $result = mysqli_query($conn, "SELECT * FROM keluarga WHERE NIK='$nik'");
    // $nomor = 1;
    while($data = mysqli_fetch_array($result)) {
?>
<div class="container card uper">
    <div class="card-header">
        Edit <?php echo $data['NAMA_KEPALA_KELUARGA'] ?>
    </div>
    <div class="card-body">
        <form method="post" action="../crud/keluarga/edit.php">
            <div class="form-group">
                <label for="nik">NIK :</label>
                <input type="hidden" name="NIK" value="<?php echo $data['NIK'] ?>">
                <input type="number" name="NIKBARU" value="<?php echo $data['NIK'] ?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama Kepala Keluarga :</label>
                <td><input type="text" name="NAMA_KEPALA_KELUARGA" value="<?php echo $data['NAMA_KEPALA_KELUARGA'] ?>"></td>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        <?php } ?>
    </div>
</div>
<?php include '../layout/foot.php';?>