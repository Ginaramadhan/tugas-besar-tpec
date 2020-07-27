<div class="card-body">
    <div class="container">
    <!---- SESSION --->
    <?php if( $this->session->flashdata('flash') ) : ?>
  <div class="row mt-3">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  Selamat! Data Pemberian Imunisasi Anak dan Balita <strong> Berhasil  <?= $this->session->flashdata('flash'); ?> </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div></div>
  <?php endif; ?>
  <!------ SESSION -->
    <div class="row mt-3">
        <div class="col">
        <h3> Data Pemberian Imunisasi Anak dan Balita</h3><hr>
        <table class="table table-sm table-bordered table-hover">
  <thead class="thead-dark">
    <tr class= "border border-dark">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Imunisasi</th>
      <th scope="col">Jenis Imunisasi</th>
      <th scope="col">Usia Anak</th>
      <th scope="col">Usia Wajib Imunisasi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
  <?php foreach ($imun as $imunn) : ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $imunn['Nama_anak']; ?></td>
      <td><?= $imunn['Tanggal_penimbangan']; ?></td>
      <td><?= $imunn['Jenis_imunisasi']; ?></td>
      <td><?= $imunn['Usia']; ?></td>
      <td><?= $imunn['Usia_wajib']; ?></td>
      <td>
      <a class="btn btn-info" href="<?= base_url(); ?>Imunisasi/detail/<?= $imunn['Kode_timbangan']; ?>" role="button">Info</a>
       <a class="btn btn-warning" href="<?= base_url(); ?>Imunisasi/edit/<?= $imunn['Kode_timbangan']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin diubah?');">Edit</a>
       <a class="btn btn-danger" href="<?= base_url(); ?>Imunisasi/hapus/<?= $imunn['Kode_timbangan']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br><br><br>

        </div>
    </div>
</div>
</div>