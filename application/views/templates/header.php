<?php
defined('BASEPATH') or exit('No script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sobat Rumah - <?php echo $judul; ?></title>
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.js'); ?>"></script>
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
            <a class="h5 text-secondary font-weight-bold dropdown-toggle " type="button" id="kategori_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>

            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="kategori_dropdown" style="margin-top: 1.5em">
              <p class="dropdown-item">
                Furniture Rumah
              </p>
              <div class="dropdown-divider"></div>
              <p class="dropdown-item">
                Furniture Kantor
              </p>
              <div class="dropdown-divider"></div>
              <p class="dropdown-item">
                Furniture Anak
              </p>
            </div>
          </li>
          <!-- Akhir Dropdown - Kategori -->
          <div class="topbar-divider"></div>
          <li class="nav-item no-arrow ml-2">
            <a class="text-secondary" href="<?= base_url('Account/cart'); ?>" title="Keranjang">
              <i class="fas fa-shopping-cart fa-lg" style="color: rgb(207, 100, 0)"></i>
            </a>
          </li>
          <li class="nav-item no-arrow ml-3">
            <form class="search-form searchbar" action="index.html" method="post" role="search" id="hiddenSearchBox">
              <div class="input-group">
                <input class="form-control form-control-md" placeholder="Cari produk.." type="search" name="" value="">
              </div>
            </form>
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
