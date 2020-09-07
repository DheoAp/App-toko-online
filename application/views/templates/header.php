<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?= base_url().'assets/bootstrap/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?= base_url().'assets/fontawesome/all.css'?>">
  <link rel="stylesheet" href="<?= base_url().'assets/style/style.css'?>">
  <title><?= $judul;?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-store-alt"></i> Toko Online Dheo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url()?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategori
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Elektronik</a>
          <a class="dropdown-item" href="#">Pakaian Pria</a>
          <a class="dropdown-item" href="#">Pakaian Wanita</a>
          <a class="dropdown-item" href="#">Pakaian Anak-anak</a>
          <a class="dropdown-item" href="#">Peralatan Olahraga</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav mr-5">
      <li class="nav-item active text-light">
        <?php
         $keranjang = '<i class="fa fa-cart-arrow-down"></i> '.$this->cart->total_items(). ' items'
        ?>
        
        <?= anchor('welcome/keranjang',$keranjang);?>
      </li>
    </ul>
  </div>
</nav>


<div class="container mt-5">