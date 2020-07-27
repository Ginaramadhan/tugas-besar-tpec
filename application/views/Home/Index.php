<div class="container">
<div class="row mt-5">
<div class="card w-100">
    <div class="card-body">
    <!--- JUMBOTRON -->
    <div class=" jumbotron-fluid">
    <div class="container" style="background-color: #ffffff;"><br>
    <h1 class="display-4">Selamat Datang, Admin!</h1>
    <hr class="my-4"><P>
    </div>
    </div>
        <div class="row">
    <?php foreach($home as $h): ?>
        <!----- 1 ----->
        <div class="col-md-4">
        <div class="card" style="width: 20rem;">
        <div class="card-body">
        <h5 class="card-title text-center"><?= $h->Judul_artikel ?> </H5><hr>
        <p class="card-text">
        <?= $h->Isi_artikel; ?><br><br>
        <a class="btn btn-danger float-right" href="<?= base_url('Home/edit/'.$h->Kode_artikel);?>">EDIT</a>
        </p>
        </div>
        </div>
        </div>
    <?php endforeach; ?>
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