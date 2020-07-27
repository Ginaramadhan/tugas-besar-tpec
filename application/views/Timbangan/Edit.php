<div class="container">
<div class="row mt-4">
<div class="col-md-6">
<h3> Perubahan Data anak dan balita </h3><hr>
<div class="card">
  <div class="card-header text-center">
    Form Rubah Data Anak dan Balita
  </div>
  <div class="card-body">
    <form action="<?= base_url('Timbangan/proses_edit/'.$this->uri->segment(3)) ?>" method="post">
    <!-- <input type="hidden" name="Kode_timbangan" value="<?= $timbangan['Kode_timbangan']; ?>"> -->
        <div class="form-group">
        <label for="Id_Anak">ID Anak</label>
        <input type="text" name="Id_anak" class="form-control" id="Id_anak" value="<?= $timbangan['Id_anak']?>">
        </div>
        <div class="form-group">
        <label for="Tanggal_penimbangan">Tanggal Penimbangan</label>
        <input type="date" name="Tanggal_penimbangan" class="form-control" id="Tanggal_penimbangan" value="<?= $timbangan['Tanggal_penimbangan']?>">
        </div>
        <div class="form-group">
        <label for="Berat_timbangan">Berat Ditimbang</label>
        <input type="text" name="Berat_timbangan" class="form-control" id="Berat_timbangan" value="<?= $timbangan['Berat_timbangan']?> ">
        </div>
        <div class="form-group">
        <label for="Tinggi_timbangan">Tinggi Ditimbang</label>
        <input type="text" name="Tinggi_timbangan" class="form-control" id="Tinggi_timbangan" value="<?= $timbangan['Tinggi_timbangan']?> ">
        </div>
        <div class="form-group">
        <label for="Usia_timbangan">Usia</label>
        <input type="text" name="Usia_timbangan" class="form-control" id="Usia_timbangan" value="<?= $timbangan['Usia']?>">
        </div>
        <div class="form-group">
        <label for="Kode_imunisasi">Jenis Imunisasi</label>
        <select class="form-control" id="Kode_imunisasi" name="Kode_imunisasi" readonly="">
        <!-- <option value="0" disabled=""> Pilih Jenis Imunisasi </option> -->
        <?php foreach ($imun->result() as $row): ?>
         <?php if ($timbangan['Kode_imunisasi'] == $row->Kode_imunisasi) { ?>
               <option value="<?= $row->Kode_imunisasi ?>" selected><?= $row->Jenis_imunisasi ?></option>
            <?php  } else { ?>
                <option value="<?= $row->Kode_imunisasi ?>"> <?= $row->Jenis_imunisasi ?></option>
            <?php } ?>
            <?php endforeach; ?>
        </select>
        </div>
        <div class="form-group">
        <label for="Kode_vitamin">Jenis Vitamin</label>
        <select class="form-control" id="Kode_vitamin" name="Kode_vitamin" readonly="">
        <!-- <option value="0" disabled=""> Pilih Jenis Vitamin </option> -->
        <?php foreach ($vitamin->result() as $vit) : ?>
         <?php   if ($timbangan['Kode_imunisasi'] == $vit->Kode_vitamin) { ?>
            <option value="<?= $vit->Kode_vitamin ?>" selected> <?= $vit->Jenis_vitamin ?></option>
         <?php }else { ?>
                <option value="<?= $vit->Kode_vitamin ?>"> <?= $vit->Jenis_vitamin ?></option>
         <?php  } ?>
            <?php  endforeach; ?>
        </select>
        </div>
        <br>
        <button type="submit" name="edit" class="btn btn-primary"> Ubah Data </button>
        <a class="btn btn-success float-right" href="<?= base_url(); ?>Timbangan" role="button">Batal</a>
    </form>
  </div>
</div>
</div>
</div>
</div>
<br><br><br>