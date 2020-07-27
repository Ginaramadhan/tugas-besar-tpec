<div class="card-body">
    <div class="container">
    <div class="row mt-3">
        <div class="col">
        <h3> Data Perhitungan Gizi Anak dan Balita</h3><hr>
        <a class="btn btn-primary" href="<?= base_url(); ?>Gizi/Tambah/" role="button">Tambah Data Pengecekan</a><br><br>
        <table class="table table-sm table-bordered table-hover">
  <thead class="thead-dark">
    <tr class= "border border-dark">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Pengecekan</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Berat Badan</th>
      <th scope="col">Tinggi Badan </th>
      <th scope="col">Hasil Pengecekan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
  <?php foreach ($cekgizi as $gizi) : ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $gizi['Nama_anak']; ?></td>
      <td><?= $gizi['Tanggal_cek']; ?></td>
      <td><?= $gizi['Jenis_kelamin']; ?></td>
      <td><?= $gizi['Berat_gizi']; ?></td>
      <td><?= $gizi['Tinggi_gizi']; ?></td>
      <td><?= $gizi['Hasil']; ?></td>
      <td>
       <a class="btn btn-info" href="#" role="button">Detail</a>
       <a class="btn btn-warning" href="#" role="button">Cek Ulang</a>
       <a class="btn btn-danger" href="#" role="button">Hapus</a>
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