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
  <a class="navbar-brand" href="<?= base_url()?>"><i class="fas fa-store-alt"></i> Toko Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url()?>admin">Data Barang <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url()?>admin/invoice">Invoice <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
  </div>
</nav>


<div class="container mt-5">