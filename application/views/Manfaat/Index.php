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
    <?php foreach($manfaat as $m): ?>
        <!----- 1 ----->
        <div class="col-md-6">
        <div class="card" style="width: 30rem;">
        <div class="card-body">
        <h5 class="card-title text-center"><?= $m->Judul_artikel ?> </H5><hr>
        <p class="card-text">
        <?= $m->Isi_artikel; ?><br><br>
        <a class="btn btn-danger float-right" href="<?= base_url('Manfaat/edit/'.$m->Kode_artikel);?>">EDIT</a>
        
        </p>
        </div>
        </div>
        </div>
    <?php endforeach; ?>
        </div>
        <br>
    </div>
    </div>
    <BR><BR>
    <!--------- CARDS ---->
    </div>
</div>
</div>
</div>