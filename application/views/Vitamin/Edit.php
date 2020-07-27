<div class="container">
<div class="row mt-4">
<div class="col-md-6">
<h3> Perubahan Data anak dan balita </h3><hr>
<div class="card">
  <div class="card-header text-center">
    Form Rubah Data Anak dan Balita
  </div>
  <div class="card-body">
    <form action="<?= base_url('Imunisasi/proses_edit/'.$this->uri->segment(3)) ?>" method="post">
    <!-- <input type="hidden" name="Kode_timbangan" value="<?= $timbangan['Kode_timbangan']; ?>"> -->
        <div class="form-group">
        <label for="Id_Anak">ID Anak</label>
        <input type="text" name="Id_anak" class="form-control" id="Id_anak" value="<?= $timbangan['Id_anak']?>" readonly="">
        </div>
        <div class="form-group">
        <label for="Tanggal_penimbangan">Tanggal Pemberian Vitamin</label>
        <input type="date" name="Tanggal_penimbangan" class="form-control" id="Tanggal_penimbangan" value="<?= $timbangan['Tanggal_penimbangan']?>" readonly="">
        </div>
        <div class="form-group">
        <label for="Usia_timbangan">Usia Anak</label>
        <input type="text" name="Usia_timbangan" class="form-control" id="Usia_timbangan" value="<?= $timbangan['Usia_timbangan']?>" readonly="">
        </div>
        <div class="form-group">
        <label for="Kode_vitamin">Jenis Vitamin</label>
        <select class="form-control" id="Kode_vitamin" name="Kode_vitamin">
        <!-- <option value="0" disabled=""> Pilih Jenis Vitamin </option> -->
        <?php foreach ($vitamin->result() as $vit): ?>
         <?php if ($timbangan['Kode_vitamin'] == $vit->Kode_vitamin) { ?>
               <option value="<?= $vit->Kode_vitamin ?>" selected><?= $vit->Jenis_vitamin ?></option>
            <?php  } else { ?>
                <option value="<?= $vit->Kode_vitamin ?>"> <?= $vit->Jenis_vitamin ?></option>
            <?php } ?>
            <?php endforeach; ?>
        </select>
        </div>
        <br>
        <button type="submit" name="edit" class="btn btn-primary"> Ubah Data </button>
        <a class="btn btn-success float-right" href="<?= base_url(); ?>Vitamin" role="button">Batal</a>
    </form>
  </div>
</div>
</div>
</div>
</div>
<br><br><br>