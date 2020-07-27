<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
        <div class="card-header text-center font-weight-bold">
            Detail Data Timbangan Anak dan Balita
        </div>
        <div class="card-body">
        <button type="button" class="btn btn-outline-dark float-right font-weight-bold" disabled>ID Anak : A - 0<?= $timbangan['Id_anak']; ?></button><br><br><br>
        <table class="table">
            <tbody class="">
                <tr>
                <th scope="row">Nama Anak</th>
                <td>:</td>
                <td><?= $timbangan['Nama_anak']; ?></td>
                </tr>

                <tr>
                <th scope="row">Jenis Kelamin</th>
                <td>:</td>
                <td><?= $timbangan['Jenis_kelamin']; ?></td>
                </tr>
                
                <tr>
                <th scope="row">Tanggal Penimbangan</th>
                <td>:</td>
                <td><?= $timbangan['Tanggal_penimbangan']; ?></td>
                </tr>
                
                <tr>
                <th scope="row">Berat Sebelumnyna</th>
                <td>:</td>
                <td><?= $timbangan['Berat_badan']; ?></td>
                </tr>

                <tr>
                <th scope="row">Berat Penimbangan</th>
                <td>:</td>
                <td><?= $timbangan['Berat_timbangan']; ?></td>
                </tr>

                <tr>
                <th scope="row">Tinggi Sebelumnya</th>
                <td>:</td>
                <td><?= $timbangan['Tinggi_badan']; ?></td>
                </tr>

                <tr>
                <th scope="row">Tinggi Penimbangan</th>
                <td>:</td>
                <td><?= $timbangan['Tinggi_timbangan']; ?></td>
                </tr>

                <tr>
                <th scope="row">Usia Penimbangan</th>
                <td>:</td>
                <td><?= $timbangan['Usia_timbangan']; ?></td>
                </tr>

            </tbody>
        </table>
                <hr>
                <a href="<?= base_url(); ?>Timbangan" class="btn btn-primary">Kembali</a>

        </div>
        </div>
        </div>
    </div>
</div> <BR><BR><BR>