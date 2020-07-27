<div class="container">
<div class="row mt-4">
<div class="col-md-6">
<h3> Perubahan Data vitamin </h3><hr>
<div class="card">
  <div class="card-header">
    Form Rubah Data vitamin
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
    <input type="hidden" name="id" value="<?= $vitamin['Kode_vitamin']; ?>">
        <div class="form-group">
        <label for="Jenis_vitamin">Jenis Imunisasi</label>
        <input type="text" name="Jenis_vitamin" class="form-control" id="Jenis_vitamin" value="<?= $vitamin['Jenis_vitamin']?>">
        </div>
        <div class="form-group">
        <label for="Usia_wajib_vitamin">Usia Wajib</label>
        <input type="text" name="Usia_wajib_vitamin" class="form-control" id="Usia_wajib_vitamin" value="<?= $vitamin['Usia_wajib_vitamin']?>">
        </div>
        <br>
        <button type="submit" name="edit" class="btn btn-primary"> Ubah Data </button>
        <a class="btn btn-success float-right" href="<?= base_url(); ?>Datavitamin" role="button">Batal</a>
    </form>
  </div>
</div>
</div>
</div>
</div>
<br><br><br>