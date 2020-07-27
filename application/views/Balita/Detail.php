<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
        <div class="card-header text-center font-weight-bold">
            Detail Data anak dan balita
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-outline-dark float-right font-weight-bold" disabled>ID Anak : A - 0<?= $anak['Id_anak']; ?></button><br><br><br>
            <table class="table">
            <tbody class="">
                <tr>
                <th scope="row">Nama Anak</th>
                <td>:</td>
                <td><?= $anak['Nama_anak']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Tanggal Lahir</th>
                <td>:</td>
                <td><?= $anak['Tanggal_lahir']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Jenis Kelamin</th>
                <td>:</td>
                <td><?= $anak['Jenis_kelamin']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Berat Badan</th>
                <td>:</td>
                <td><?= $anak['Berat_badan']; ?> KG</td>
                </tr>
                <tr>
                <th scope="row"> Tinggi Badan</th>
                <td>:</td>
                <td><?= $anak['Tinggi_badan']; ?> CM</td>
                </tr>
                <tr>
                <th scope="row"> Usia</th>
                <td>:</td>
                <td><?= $anak['Usia']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Nama Ibu</th>
                <td>:</td>
                <td><?= $anak['Nama_ibu']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Nama Ayah</th>
                <td>:</td>
                <td><?= $anak['Nama_ayah']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Alamat</th>
                <td>:</td>
                <td><?= $anak['Alamat']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Status Warga</th>
                <td>:</td>
                <td><?= $anak['Status']; ?></td>
                </tr>
            </tbody>
        </table>
        <hr>
            <a href="<?= base_url(); ?>Balita" class="btn btn-primary">Kembali</a>
        </div>
        </div>
        </div>
    </div>
</div><br><br><br>