<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title> <?= $judul; ?> </title>
    </head>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <style>
    .navbar-dark .navbar-nav .nav-link {
        color: #FFF!important;
    }

    .navbar-dark .navbar-nav .nav-link:hover {
        background-color: grey;
    }
    </style>
    <body style="background-color: #FCFCFC;">
    <div class="col-md-20 text-center" style="background-color: #B6D2D2;" >
    <br><h2> Sistem Informasi Posyandu <br> Kampung Cisalak Desa Kertajaya </h2><br>
    </div>

    <!-- NAVBAR ---------- -->
     <nav class="navbar navbar-expand-lg navbar-hover navbar-dark font-weight-bolder " style="background-color: #565449;">
     <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item ">
            <a class="nav-link" href="<?= base_url(); ?>">Halaman Utama <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Balita">Data Anak </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Timbangan">Penimbangan Anak</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Imunisasi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url(); ?>Imunisasi">Imunisasi Anak</a>
          <a class="dropdown-item" href="<?= base_url(); ?>Dataimunisasi">Data Vaksin Imunisasi</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Vitamin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url(); ?>Vitamin">Vitamin Anak</a>
          <a class="dropdown-item" href="<?= base_url(); ?>Datavitamin">Data Vitamin</a>
        </div>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Gizi">Perhitungan Gizi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
        </li>
        </ul>
    </div>
    </div>
    </nav>