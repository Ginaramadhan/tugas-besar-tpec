    <div class="container">
   <!---- SESSION --->
   <?php if( $this->session->flashdata('flash') ) : ?>
  <div class="row mt-3">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  Selamat! Data Vaksin Imunisasi Anak dan Balita <strong> Berhasil  <?= $this->session->flashdata('flash'); ?> </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div></div>
  <?php endif; ?>
  <!------ SESSION -->
    <!--- VIEW -->
    <div class="row mt-4">
        <div class="col">
        <h3> Data Vaksin Imunisasi untuk Anak dan Balita  </h3><hr>
        <a class="btn btn-primary" href="<?= base_url(); ?>Dataimunisasi/Tambah" role="button">Tambah Data Vaksin Imunisasi</a><br><br>
        <table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr class= "border border-dark">
      <th scope="col">No</th>
      <th scope="col">Kode Vaksin</th>
      <th scope="col">Jenis Vaksin</th>
      <th scope="col">Usia Wajib</th>
      <th scope="col-md-9"> Aksi </th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
  <?php foreach ($imunisasi as $datim) : ?>
    <tr>
      <td><?= $no++ ?></td>
      <td>IM - 0<?= $datim['Kode_imunisasi']; ?></td>
      <td><?= $datim['Jenis_imunisasi']; ?></td>
      <td><?= $datim['Usia_wajib']; ?></td>
      <td>
       <a class="btn btn-info" href="<?= base_url(); ?>Dataimunisasi/detail/<?= $datim['Kode_imunisasi']; ?>" role="button">DETAIL</a>
       <a class="btn btn-warning" href="<?= base_url(); ?>Dataimunisasi/edit/<?= $datim['Kode_imunisasi']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');">EDIT</a>
       <a class="btn btn-danger" href="<?= base_url(); ?>Dataimunisasi/hapus/<?= $datim['Kode_imunisasi']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">HAPUS</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br><br><br>

        </div>
    </div>
</div>