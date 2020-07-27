    <div class="container">
    <!---- SESSION --->
    <?php if( $this->session->flashdata('flash') ) : ?>
  <div class="row mt-3">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  Selamat! Data Vitamin Anak dan Balita <strong> Berhasil  <?= $this->session->flashdata('flash'); ?> </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div></div>
  <?php endif; ?>
  <!------ SESSION -->
    <!-- VIEW -->
    <div class="row mt-4">
        <div class="col">
        <h3> Data Vitamin untuk Anak dan Balita </h3><hr>
        <a class="btn btn-primary" href="<?= base_url(); ?>Datavitamin/Tambah" role="button">Tambah Data Vitamin</a><br><br>
        <table class="table table-sm table-bordered table-hover">
  <thead class="thead-dark">
    <tr class= "border border-dark">
      <th scope="col">No</th>
      <th scope="col">Kode Vitamin</th>
      <th scope="col">Jenis Vitamin</th>
      <th scope="col">Usia Wajib</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
  <?php foreach ($vitamin as $datvit) : ?>
    <tr>
      <td><?= $no++ ?></td>
      <td>VIT - 0<?= $datvit['Kode_vitamin']; ?></td>
      <td><?= $datvit['Jenis_vitamin']; ?></td>
      <td><?= $datvit['Usia_wajib_vitamin']; ?></td>
      <td class="float-centered">
       <a class="btn btn-info" href="<?= base_url(); ?>Datavitamin/detail/<?= $datvit['Kode_vitamin']; ?>" role="button">LIHAT</a>
       <a class="btn btn-warning" href="<?= base_url(); ?>Datavitamin/edit/<?= $datvit['Kode_vitamin']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');">EDIT</a>
       <a class="btn btn-danger" href="<?= base_url(); ?>Datavitamin/hapus/<?= $datvit['Kode_vitamin']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">HAPUS</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br><br><br><br><br><br>


        </div>
    </div>
</div><BR><BR>