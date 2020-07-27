<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
        <div class="card-header text-center font-weight-bold">
            Detail Data vaksin imunisasi
        </div>
        <div class="card-body">
        <button type="button" class="btn btn-outline-dark float-right font-weight-bold" disabled>Kode Vaksin : IM - 0<?= $imunisasi['Kode_imunisasi']; ?></button><br><br><br>
        <table class="table">
            <tbody class="">
                <tr>
                <th scope="row">Jenis Imunisasi</th>
                <td>:</td>
                <td><?= $imunisasi['Jenis_imunisasi']; ?></td>
                </tr>

                <tr>
                <th scope="row">Usia Wajib</th>
                <td>:</td>
                <td><?= $imunisasi['Usia_wajib']; ?></td>
                </tr>
            </tbody>
        </table>
                <hr>
                <a href="<?= base_url(); ?>Dataimunisasi" class="btn btn-primary">Kembali</a>

        </div>
        </div>
        </div>
    </div>
</div> <BR><BR><BR>