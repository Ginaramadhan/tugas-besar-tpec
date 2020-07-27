<div class="container">
<div class="row mt-4">
<div class="col-md-6">
<h3> Penambahan Data anak dan balita </h3><hr>
<div class="card">
  <div class="card-header">
    Form Tambah Data Anak dan Balita
  </div>
  <div class="card-body">
    <!--- FORM --->
    <form action="" method="post">
        <div class="form-group">
        <label for="Nama_anak">Nama Anak</label>
        <input type="text" name="Nama_anak" class="form-control" id="Nama_anak">
        <small  class="form-text text-danger"><?= form_error('Nama_anak') ?></small>
        </div>
        <div class="form-group">
        <label for="Tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="Tanggal_lahir" class="form-control" id="Tanggal_lahir">
        </div>
        <div class="form-group">
        <label for="Jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" id="Jenis_kelamin" name="Jenis_kelamin">
            <option value="Laki-Laki">Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        </div>
        <div class="form-group">
        <label for="Berat_badan">Berat Badan Anak</label>
        <input type="text" name="Berat_badan" class="form-control" id="Berat_badan" placeholder="Contoh = 12.5 (Tanpa Kg)">
        <small  class="form-text text-danger"><?= form_error('Berat_badan') ?></small>
        </div>
        <div class="form-group">
        <label for="Tinggi_badan">Tinggi Badan Anak</label>
        <input type="text" name="Tinggi_badan" class="form-control" id="Tinggi_badan" placeholder="Contoh = 55 (Tanpa Cm)">
        <small  class="form-text text-danger"><?= form_error('Tinggi_badan') ?></small>
        </div>
        <div class="form-group">
        <label for="Usia">Usia</label>
        <input type="text" name="Usia" class="form-control" id="Usia">
        <small  class="form-text text-danger"><?= form_error('Usia') ?></small>
        </div>
        <div class="form-group">
        <label for="Nama_ibu">Nama Ibu</label>
        <input type="text" name="Nama_ibu" class="form-control" id="Nama_ibu">
        <small  class="form-text text-danger"><?= form_error('Nama_ibu') ?></small>
        </div>
        <div class="form-group">
        <label for="Nama_ayah">Nama Ayah</label>
        <input type="text" name="Nama_ayah" class="form-control" id="Nama_ayah">
        <small  class="form-text text-danger"><?= form_error('Nama_ayah') ?></small>
        </div>
        <div class="form-group">
        <div class="form-group">
        <label for="Alamat">Alamat </label>
        <input type="text" name="Alamat" class="form-control" id="Alamat">
        <small  class="form-text text-danger"><?= form_error('Alamat') ?></small>
        </div>
        <label for="Status">Status Warga</label>
        <select class="form-control" id="Status" name="Status">
            <option value="Warga Asli">Warga Asli</option>
            <option value="Warga Tamu">Warga Tamu</option>
        </select>
        </div><br>
        <button type="submit" name="tambah" class="btn btn-primary"> Tambah Data </button>
        <a class="btn btn-success float-right" href="<?= base_url(); ?>Balita" role="button">Batal</a>
    </form>
  </div>
</div>
</div>
</div>
</div><BR><BR><BR>