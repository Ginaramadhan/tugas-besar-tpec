<div class="container">
<div class="row mt-4">
<div class="col-md-6">
<h3> Perubahan Data anak dan balita </h3><hr>
<div class="card">
  <div class="card-header text-center">
    Form Rubah Data Anak dan Balita
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
    <input type="hidden" name="id" value="<?= $anak['Id_anak']; ?>">
        <div class="form-group">
        <label for="Nama_anak">Nama Anak</label>
        <input type="text" name="Nama_anak" class="form-control" id="Nama_anak" value="<?= $anak['Nama_anak']?>">
        </div>
        <div class="form-group">
        <label for="Tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="Tanggal_lahir" class="form-control" id="Tanggal_lahir" value="<?= $anak['Tanggal_lahir']?>">
        </div>
        <div class="form-group">
        <label for="Jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" id="Jenis_kelamin" name="Jenis_kelamin">
            <?php foreach( $Jeniskelamin as $jk ) : ?>
            <?php if( $jk == $anak['Jenis_kelamin'] ) : ?>
                <option value="<?= $jk; ?>" selected> <?= $jk; ?> </option>
            <?php else : ?>
                <option value="<?= $jk; ?>" > <?= $jk; ?> </option>
            <?php endif; ?>
            <?php endforeach; ?>
        </select>
        </div>
        <div class="form-group">
        <label for="Berat_badan">Berat Badan Anak</label>
        <input type="text" name="Berat_badan" class="form-control" id="Berat_badan" value="<?= $anak['Berat_badan']?> ">
        </div>
        <div class="form-group">
        <label for="Tinggi_badan">Tinggi Badan Anak</label>
        <input type="text" name="Tinggi_badan" class="form-control" id="Tinggi_badan" value="<?= $anak['Tinggi_badan']?> ">
        </div>
        <div class="form-group">
        <label for="Usia">Usia</label>
        <input type="text" name="Usia" class="form-control" id="Usia" value="<?= $anak['Usia']?>">
        </div>
        <div class="form-group">
        <label for="Nama_ibu">Nama Ibu</label>
        <input type="text" name="Nama_ibu" class="form-control" id="Nama_ibu" value="<?= $anak['Nama_ibu']?>">
        </div>
        <div class="form-group">
        <label for="Nama_ayah">Nama Ayah</label>
        <input type="text" name="Nama_ayah" class="form-control" id="Nama_ayah" value="<?= $anak['Nama_ayah']?>">
        </div>
        <div class="form-group">
        <div class="form-group">
        <label for="Alamat">Alamat </label>
        <input type="text" name="Alamat" class="form-control" id="Alamat" value="<?= $anak['Alamat']?>">
        </div>
        <label for="Status">Status Warga</label>
        <select class="form-control" id="Status" name="Status"> value="<?= $anak['']?>"
        <?php foreach( $Status as $asal ) : ?>
            <?php if( $asal == $anak['Status'] ) : ?>
                <option value="<?= $asal; ?>" selected> <?= $asal; ?> </option>
            <?php else : ?>
                <option value="<?= $asal; ?>" > <?= $asal; ?> </option>
            <?php endif; ?>
            <?php endforeach; ?>
        </select>
        </div><br>
        <button type="submit" name="edit" class="btn btn-primary"> Ubah Data </button>
        <a class="btn btn-success float-right" href="<?= base_url(); ?>Balita" role="button">Batal</a>
    </form>
  </div>
</div>
</div>
</div>
</div>
<br><br><br>