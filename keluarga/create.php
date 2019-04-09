<?php include '../layout/head.php';?>
<?php include '../layout/header.php';?>
<div class="container card uper">
  <div class="card-header">
    Add
  </div>
  <div class="card-body">
      <form method="post" action="../crud/keluarga/create.php">
          <div class="form-group">
              <label for="nik">NIK :</label>
              <input type="number" class="form-control" name="NIK"/>
          </div>
          <div class="form-group">
              <label for="nama">Nama Kepala Keluarga :</label>
              <input type="text" class="form-control" name="NAMA_KEPALA_KELUARGA"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
<?php include '../layout/foot.php';?>