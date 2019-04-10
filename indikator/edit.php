<?php
    include('../layout/head.php');
    include('../layout/header.php');
?>
<?php 
    include "../crud/config.php";
    $id = $_GET['ID'];
    $result = mysqli_query($conn, "SELECT indikator.ID, keluarga.NAMA_KEPALA_KELUARGA, indikator.PENDAPATAN, indikator.JUMLAH_ANGGOTA_KELUARGA, indikator.PEKERJAAN_KEPALA_KELUARGA FROM indikator INNER JOIN keluarga ON keluarga.NIK = indikator.NIK WHERE indikator.ID='$id'");
    // $nomor = 1;
    while($data = mysqli_fetch_array($result)) {
?>
<div class="container card uper">
    <div class="card-header">
        Edit, <?php echo $data['NAMA_KEPALA_KELUARGA'] ?>
    </div>
    <div class="card-body">
        <form method="post" action="../crud/indikator/edit.php">
            <div class="form-group">
                <input type="hidden" class="form-control" name="ID" value="<?php echo $data['ID'] ?>" required/>
            </div>
            <div class="form-group">
                <label for="salary">Pendapatan :</label>
                <input type="number" class="form-control" name="PENDAPATAN" value="<?php echo $data['PENDAPATAN'] ?>" required/>
            </div>
            <div class="form-group">
                <label for="count">Jumlah Anggota Keluarga :</label>
                <input type="number" class="form-control" name="JUMLAH_ANGGOTA_KELUARGA" value="<?php echo $data['JUMLAH_ANGGOTA_KELUARGA'] ?>" required/>
            </div>
            <div class="form-group">
                <label for="job">Pekerjaan Kepala Keluarga :</label>
                <input type="text" class="form-control" name="PEKERJAAN_KEPALA_KELUARGA" value="<?php echo $data['PEKERJAAN_KEPALA_KELUARGA'] ?>" required/>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        <?php } ?>
    </div>
</div>
<?php include '../layout/foot.php';?>