<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title> <?= $judul; ?> </title>

    <style>
    .navbar-dark .navbar-nav .nav-link {
        color: #FFF!important;
    }

    .navbar-dark .navbar-nav .nav-link:hover {
        background-color: dark;
    }
    </style>
    </head>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <body style="background-color: #FCFCFC;" >
	<div class="col-md-20 text-center font-weight-bold" style="background-color: #B6D2D2;" >
    <br><h2> Sistem Informasi Posyandu <br> Kampung Cisalak Desa Kertajaya </h2><br>
    </div>

    <!-- NAVBAR --> 
    
    <nav class="navbar navbar-expand-lg navbar-dark font-weight-bold" style="background-color: #565449;" > 
    <a class="navbar-brand">POSYANDU!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse active" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item ">
        <a class="nav-link" href="<?= base_url(); ?>">Halaman Utama <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
        <a class="nav-link" href="<?= base_url(); ?>Visi">Visi dan Misi</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link" href="<?= base_url(); ?>Manfaat">Manfaat</a>
        </li>
        <li class="nav-item">
        <?php if (isset($_SESSION['username'])): ?>
            <a class="nav-link" href="<?= base_url('/Login/logout') ?>">Logout</a>
            <?php else :  ?>
            <a class="nav-link" href="<?= base_url('/Login') ?>">Login</a>
            <?php endif; ?>
        </li>
    </ul>
    </div>
    </nav>
    <!-- --------------------------------------------------------------------- -->