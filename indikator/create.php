<?php include '../layout/head.php';?>
<?php include '../layout/header.php';?>
<div class="container card uper">
  <div class="card-header">
    Tambah Data Indikator
  </div>
  <div class="card-body">
      <form method="post" action="../crud/indikator/create.php">
          <div class="form-group">
              <label for="nik">Nama Kepala Keluarga :</label>
              <select class="form-control" name="NIK" required>
                <option value="" hidden>--Pilih Nama Kepala Keluarga</option>
                <?php 
                  include "../crud/config.php";
                  $result = mysqli_query($conn, "SELECT * FROM keluarga");
                  // $nomor = 1;
                  while($data = mysqli_fetch_array($result)) {
                ?>
                <option value="<?php echo $data['NIK'] ?>"> <?php echo $data['NAMA_KEPALA_KELUARGA'] ?> </option>
                <?php } ?>
              </select>
          </div>
          <div class="form-group">
              <label for="salary">Pendapatan :</label>
              <input type="number" class="form-control" name="PENDAPATAN" required/>
          </div>
          <div class="form-group">
              <label for="count">Jumlah Anggota Keluarga :</label>
              <input type="number" class="form-control" name="JUMLAH_ANGGOTA_KELUARGA" required/>
          </div>
          <div class="form-group">
              <label for="job">Pekerjaan Kepala Keluarga :</label>
              <input type="text" class="form-control" name="PEKERJAAN_KEPALA_KELUARGA" required/>
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
  </div>
</div>
<?php include '../layout/foot.php';?>