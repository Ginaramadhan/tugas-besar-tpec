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
    <div class="row mt-4">
        <div class="col">
        <h3> Data Penimbangan Anak dan Balita</h3><hr>
        <a class="btn btn-primary" href="<?= base_url(); ?>Timbangan/Tambah" role="button">Tambah Data Penimbangan</a><br><br>
        <table class="table table-sm table-bordered table-hover">
  <thead class="thead-dark">
    <tr class= "border border-dark">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Penimbangan</th>
      <th scope="col">Berat Badan </th>
      <th scope="col">Tinggi Badan</th>
      <th scope="col">Usia</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
  <?php foreach ($timbang as $timbangan) : ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $timbangan['Nama_anak']; ?></td>
      <td><?= $timbangan['Tanggal_penimbangan']; ?></td>
      <td><?= $timbangan['Berat_timbangan']; ?></td>
      <td><?= $timbangan['Tinggi_timbangan']; ?></td>
      <td><?= $timbangan['Usia_timbangan']; ?></td>
      <td>
      <a class="btn btn-info" href="<?= base_url(); ?>Timbangan/detail/<?= $timbangan['Kode_timbangan']; ?>" role="button">Info</a>
       <a class="btn btn-warning" href="<?= base_url(); ?>Timbangan/edit/<?= $timbangan['Kode_timbangan']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin diubah?');">Edit</a>
       <a class="btn btn-danger" href="<?= base_url(); ?>Timbangan/hapus/<?= $timbangan['Kode_timbangan']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">Hapus</a>
       
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br><br><br>
        </div>
    </div>
</div>