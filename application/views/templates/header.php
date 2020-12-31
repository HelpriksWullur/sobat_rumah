<?php
defined('BASEPATH') or exit('No script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sobat Rumah - <?php echo $judul; ?></title>
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Content Wrapper -->
    <div id="header-wrapper" class="d-flex flex-column bg-white" style="padding-top: 4em; padding-bottom: 3em">

      <!-- Beginning of Header -->
      <div id="header">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white fixed-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Page Heading -->
        <a href="<?= base_url('Account'); ?>">
          <h1 class="h2 mb-2 font-weight-bold" style="color: rgb(207, 100, 0)"><i>Sobat</i> Rumah</h1>
        </a>
        <div class="topbar-divider"></div>

        <!-- Topbar Navbar -->
        <ul class="d-flex align-items-center navbar-nav ml-auto">

          <!-- Dropdown - Kategori -->
          <li class="nav-item dropdown">
            <a class="h5 text-secondary font-weight-bold dropdown-toggle" type="button" id="kategori_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>

            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="kategori_dropdown" style="margin-top: 1rem">
              <a class="dropdown-item" href="<?= base_url('Tes'); ?>">
                Furniture Rumah
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url('Tes'); ?>">
                Furniture Kantor
              </a>
            </div>
          </li>
          <!-- Akhir Dropdown - Kategori -->

          <div class="topbar-divider"></div>
          <li class="nav-item no-arrow ml-2">
            <a class="text-secondary" href="<?= base_url('Account/transaksi'); ?>" title="Transaksi">
              <i class="fas fa-scroll fa-lg mr-2" style="color: rgb(205, 102, 5)"></i>
            </a>
          </li>
          <li class="nav-item no-arrow ml-3">

            <!-- input cari produk -->
            <input id="myInput" class="form-control form-control-md" placeholder="Cari produk.." type="search" name="" value="">
            <!-- akhir input cari produk -->

            <!-- filter list -->
              <ul class="list-group position-absolute" id="myList">
                <?php

                foreach ($katalog as $k) { ?>
                    <li class="list-group-item">
                      <a class="text-dark" href="" type="button" data-toggle="modal" data-target="#produk<?= $k['id_produk']; ?>">
                        <img src="<?= base_url('assets/img/produk/'); ?><?= $k['gambar']; ?>" alt="" style="width:3rem; height:3rem">
                        <span><?= $k['nama_produk']; ?></span>
                      </a>
                    </li>
                <?php } ?>
              </ul>
            <!-- akhir filter list -->
          </li>

          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <button class="btn btn-white" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bars fa-lg"></i>
            </button>

            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-md fa-fw mr-2 text-secondary"></i>
                <?php echo $user; ?>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url('Autentification/logout'); ?>">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-secondary"></i>
                <font color="red"><b>Logout</b></font>
              </a>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  <!-- End of Header -->
<script>
$(document).ready(function(){
$("#myList").hide();
$("#myInput").on("keyup", function() {
  $("#myList").show();
  var value = $(this).val().toLowerCase();
  $("#myList li").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
  if (value == '') {
    $("#myList").hide();
  }
});
});
</script>
