<div class="container">
<div class="row mt-5">
<div class="card w-100">
    <div class="card-body">
    <!--- JUMBOTRON -->
    <div class=" jumbotron-fluid">
    <div class="container" style="background-color: #ffffff;"><br>
    <hr class="my-4"><P>
    </div>
    </div>
        <div class="row">
        <!----- 1 ----->
        <div class="col-md-4">
        <div class="card" style="width: 20rem;">
        <div class="card-body">
        <h5 class="card-title text-center"><?= $artikel->Judul_artikel ?> </H5><hr>
        <p class="card-text">
        <!-- <a class="btn btn-primary float-right" href="<?= base_url('Home/baca/'.$h->Kode_artikel);?>">Baca Selengkapnya</a> -->
        <?= $artikel->Isi_artikel; ?><br><br>
        <?php if (isset($_SESSION['username'])): ?>
        <a class="btn btn-danger float-right" href="<?= base_url('Home/edit/'.$artikel->Kode_artikel);?>">EDIT</a>
        <?php endif; ?>
        </p>
        </div>
        </div>
        </div>
        </div>
        <br>

    </div>
    </div>
    <BR><BR><BR>
    <!--------- CARDS ---->
    <BR>
    </div>
    <br>
</div>
</div>
</div>