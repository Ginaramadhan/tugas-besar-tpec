<div class="container">
<div class="row mt-3">
<div class="col-md-6">
<div class="card">
  <div class="card-header">
    Form Tambah Data Perhitungan Gizi Blita 
  </div>
  <div class="card-body">
    <form action="<?= base_url('Gizi/hitungbmi');?>" method="post">
    <div class="form-group">
        <label for="Kode_gizi">ID Anak</label>
        <input type="text" class="form-control" id="Kode_gizi"->
        <label for="Kode_timbangan"> Tanggal Pengecekan</label>
        <input type="date" class="form-control" id="Kode_timbangan"->
        <label for="Id_anak">Berat Anak</label>
        <input type="text" class="form-control" id="Id_anak"->
        <label for="Hasil">Tinggi Anak</label>
        <input type="text" class="form-control" id="Hasil"->

    </div>
    </form>
    <button type="submit" name="tambah" class="btn btn-primary float-right"> Hitung Gizi </button>
  </div>
</div>
  <Br>
</div>
  <Br>
</div>
</div>
<br>