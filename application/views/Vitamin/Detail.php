<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
        <div class="card-header text-center font-weight-bold">
            Detail Data Pemberian Vitamin Anak dan Balita
        </div>
        <div class="card-body">
        <button type="button" class="btn btn-outline-dark float-right font-weight-bold" disabled>ID Anak : A - 0<?= $imun['Id_anak']; ?></button><br><br><br>
        <table class="table">
            <tbody class="">
                <tr>
                <th scope="row">Nama Anak</th>
                <td>:</td>
                <td><?= $imun['Nama_anak']; ?></td>
                </tr>

                <tr>
                <th scope="row">Jenis Kelamin</th>
                <td>:</td>
                <td><?= $imun['Jenis_kelamin']; ?></td>
                </tr>
                
                <tr>
                <th scope="row">Tanggal Pemberian Vitamin</th>
                <td>:</td>
                <td><?= $imun['Tanggal_penimbangan']; ?></td>
                </tr>
                
                <tr>
                <th scope="row">Usia Anak</th>
                <td>:</td>
                <td><?= $imun['Usia_timbangan']; ?></td>
                </tr>

                <tr>
                <th scope="row">Usia Wajib Imunisasi</th>
                <td>:</td>
                <td><?= $imun['Usia_wajib_vitamin']; ?></td>
                </tr>

                <tr>
                <th scope="row">Jenis Vitamin</th>
                <td>:</td>
                <td><?= $imun['Jenis_vitamin']; ?></td>
                </tr>

            </tbody>
        </table>
                <hr>
                <a href="<?= base_url(); ?>Imunisasi" class="btn btn-primary">Kembali</a>

        </div>
        </div>
        </div>
    </div>
</div> <BR><BR><BR>