<div class="container">
<div class="container">
    <!---- SESSION --->
    <?php if( $this->session->flashdata('flash') ) : ?>
  <div class="row mt-3">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  Selamat! Data Timbangan Anak dan Balita <strong> Berhasil  <?= $this->session->flashdata('flash'); ?> </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div></div>
  <?php endif; ?>
  <!------ SESSION -->
<div class="row mt-4">
<div class="col-md-6">
<h3> Penambahan Data Penimbangan </h3><hr>
<div class="card">
  <div class="card-header">
    Form Tambah Penimbangan
  </div>
  <div class="card-body">
    <!--- FORM --->
    <form action="<?= base_url('Timbangan/proses_tambah'); ?>" method="post">
        <div class="form-group">
        <label for="Id_anak">ID Anak</label>
        <input type="text" name="Id_anak" class="form-control" id="Id_anak" placeholder="Masukan hanya angka terakhir, Cth: 12">
        <small  class="form-text text-danger"><?= form_error('Id_anak') ?></small>
        </div>
        <div class="form-group">
        <label for="Tanggal_penimbangan">Tanggal Penimbangan</label>
        <input type="date" name="Tanggal_penimbangan" class="form-control" id="Tanggal_penimbangan">
        </div>
        <div class="form-group">
        <label for="Berat_timbangan">Berat</label>
        <input type="text" name="Berat_timbangan" class="form-control" id="Berat_timbangan" placeholder="Contoh = 12.5 (Tanpa Kg)">
        <small  class="form-text text-danger"><?= form_error('Berat_timbangan') ?></small>
        </div>
        <div class="form-group">
        <label for="Tinggi_timbangan">Tinggi</label>
        <input type="text" name="Tinggi_timbangan" class="form-control" id="Tinggi_timbangan" placeholder="Contoh = 45 (Tanpa Cm)">
        <small  class="form-text text-danger"><?= form_error('Tinggi_timbangan') ?></small>
        </div>
        <div class="form-group">
        <label for="Usia_timbangan">Usia Ditimbang</label>
        <input type="text" name="Usia_timbangan" class="form-control" id="Usia_timbangan">
        <small  class="form-text text-danger"><?= form_error('Usia_timbangan') ?></small>
        </div>
        <div class="form-group">
        <label for="Kode_imunisasi">Jenis Imunisasi</label>
        <select class="form-control" id="Kode_imunisasi" name="Kode_imunisasi">
        <option value="0" > Pilih Pemberian Imunisasi </option>
        <?php
          foreach ($imun->result() as $row){
            echo" <option value=".$row->Kode_imunisasi.">".$row->Jenis_imunisasi. "</option>";
          }
        ?>
        </select>
        </div>
        <div class="form-group">
        <label for="Kode_vitamin">Jenis Vitamin</label>
        <select class="form-control" id="Kode_vitamin" name="Kode_vitamin">
        <option value="0" > Pilih Pemberian Vitamin </option>
        <?php
          foreach ($vitamin->result() as $vit){
            echo" <option value=".$vit->Kode_vitamin.">".$vit->Jenis_vitamin. "</option>";
          }
        ?>
        </select>
        </div>
        
       <br>
        <button type="submit" name="tambah" class="btn btn-primary"> Tambah Data </button>
        <a class="btn btn-success float-right" href="<?= base_url(); ?>Timbangan" role="button">Batal</a>
    </form>
  </div>
</div>
</div>
</div>
</div><BR><BR><BR>