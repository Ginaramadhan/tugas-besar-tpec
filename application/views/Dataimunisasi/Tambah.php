<div class="container">
<div class="row mt-4">
<div class="col-md-6">
<h3> Penambahan Data vaksin imunisasi </h3><hr>
<div class="card">
  <div class="card-header">
    Form Tambah Data Vaksin Imunisasi
  </div>
  <div class="card-body">
  <!--- FORM VALIDASI -->
  <?php if( validation_errors() ) : 
  ?>
  <div class="alert alert-danger" role="alert">
    <?= validation_errors(); ?>
  </div>
  <?php endif; ?>
    <!--- FORM --->
    <form action="" method="post">
        <div class="form-group">
        <label for="Jenis_imunisasi">Jenis Imunisasi</label>
        <input type="text" name="Jenis_imunisasi" class="form-control" id="Jenis_imunisasi">
        </div>
        <div class="form-group">
        <label for="Usia_wajib">Usia Wajib</label>
        <input type="text" name="Usia_wajib" class="form-control" id="Usia_wajib">
        </div>
      <br>
        <button type="submit" name="tambah" class="btn btn-primary"> Tambah Data </button>
        <a class="btn btn-success float-right" href="<?= base_url(); ?>Dataimunisasi" role="button">Batal</a>
    </form>
  </div>
</div>
</div>
</div>
</div>
<BR><BR><BR>