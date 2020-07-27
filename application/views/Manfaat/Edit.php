<div class="container">
<div class="row mt-4">
<div class="col-md-6">
<h3> Perubahan Artikel</h3><hr>
<div class="card">
  <div class="card-header text-center">
    Form Rubah Data Artikel 
  </div>
  <div class="card-body">
 
    <!--- FORM --->
    <form action="<?= base_url('Manfaat/proces_edit') ?>" method="post">
    <input type="hidden" name="Kode_artikel" value="<?= $artikel->Kode_artikel; ?>">
        <div class="form-group">
        <label for="Judul_artikel">Judul Artikel </label>
        <input type="text" name="judul_artikel" class="form-control" id="Judul_artikel" value="<?= $artikel->Judul_artikel?>">
        </div>

        <div class="form-group">
        <label for="Isi_artikel">Isi Artikel </label>
        <textarea name="Isi_artikel" class="form-control" rows="10">
        <?= $artikel->Isi_artikel?>
        </textarea>
        </div>
       <br>
        <button type="submit" name="edit" class="btn btn-primary"> Ubah Data </button>
        <a class="btn btn-success float-right" href="<?= base_url(); ?>Manfaat" role="button">Batal</a>
    </form>
  </div>
</div>
</div>
</div>
</div>
<br><br><br>