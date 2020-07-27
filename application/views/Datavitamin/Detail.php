<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
        <div class="card-header text-center font-weight-bold">
            Detail Data vitamin anak dan balita
        </div>
        <div class="card-body">
        <button type="button" class="btn btn-outline-dark float-right font-weight-bold" disabled>Kode Vitamin : VIT - 0<?= $vitamin['Kode_vitamin']; ?></button><br><br><br>
        <table class="table">
            <tbody class="">
                <tr>
                <th scope="row">Jenis Vitamin</th>
                <td>:</td>
                <td><?= $vitamin['Jenis_vitamin']; ?></td>
                </tr>

                <tr>
                <th scope="row">Usia Wajib</th>
                <td>:</td>
                <td><?= $vitamin['Usia_wajib_vitamin']; ?></td>
                </tr>
            </tbody>
        </table>
                <hr>
                <a href="<?= base_url(); ?>Datavitamin" class="btn btn-primary">Kembali</a>

        </div>
        </div>
        </div>
    </div>
</div><BR><BR><BR>