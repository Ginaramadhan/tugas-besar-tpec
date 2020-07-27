<div class="container">
<!---- SESSION --->
    <?php if( $this->session->flashdata('flash') ) : ?>
  <div class="row mt-3">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  Selamat! Data Anak dan Balita <strong> Berhasil  <?= $this->session->flashdata('flash'); ?> </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div></div>
  <?php endif; ?>
  <!------ SESSION -->
  <!------ VIEW DATA ------->
  <div class="row mt-4">
        <div class="col">
        <h3> Data Anak dan Balita </h3><hr>
        <a class="btn btn-primary" href="<?= base_url(); ?>Balita/Tambah" role="button">Tambah Data Anak</a><br><br>
        <table class="table table-sm table-bordered table-hover">
  <thead class="thead-dark">
    <tr class= "border border-dark">
      <th scope="col">No</th>
      <th scope="col">ID Anak</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Berat Badan (KG)</th>
      <th scope="col">Tinggi Badan (CM)</th>
      <th scope="col">Usia</th>
      <th scope="col"> Aksi </th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
  <?php foreach ($anak as $balita) : ?>
    <tr>
      <td><?= $no++ ?></td>
      <td>A - 0<?= $balita['Id_anak']; ?></td>
      <td><?= $balita['Nama_anak']; ?></td>
      <td><?= $balita['Jenis_kelamin']; ?></td>
      <td><?= $balita['Berat_badan']; ?></td>
      <td><?= $balita['Tinggi_badan']; ?></td>
      <td><?= $balita['Usia']; ?></td>
      <td>
       <a class="btn btn-info" href="<?= base_url(); ?>Balita/detail/<?= $balita['Id_anak']; ?>" role="button">LIHAT</a>
       <a class="btn btn-warning" href="<?= base_url(); ?>Balita/edit/<?= $balita['Id_anak']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');">EDIT</a>
       <a class="btn btn-danger" href="<?= base_url(); ?>Balita/hapus/<?= $balita['Id_anak']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">HAPUS </a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table><br><br><br><br>
        </div>
    </div>
</div>