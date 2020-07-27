<div class="container">
<div class="row mt-4">
<div class="col-md-6">
<h3> Penambahan Data vitamin posyandu </h3><hr>
<div class="card">
  <div class="card-header">
    Form Tambah Data vitamin
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
        <label for="Jenis_vitamin">Jenis Vitamin</label>
        <input type="text" name="Jenis_vitamin" class="form-control" id="Jenis_vitamin">
        </div>
        <div class="form-group">
        <label for="Usia_wajib_vitamin">Usia Wajib</label>
        <input type="text" name="Usia_wajib_vitamin" class="form-control" id="Usia_wajib-vitamin" placeholder="Contoh= 1 Bulan">
        </div>
      <br>
        <button type="submit" name="tambah" class="btn btn-primary"> Tambah Data </button>
        <a class="btn btn-success float-right" href="<?= base_url(); ?>Datavitamin" role="button">Kembali</a>    </form>
  </div>
</div>
</div>
</div>
</div>
<BR><BR><BR>