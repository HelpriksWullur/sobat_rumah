<?php
defined('BASEPATH') or exit('No script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobat Rumah - <?php echo $judul; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  </head>
  <body>
    <div class="container-fluid row">
      <div id="img-login" class="w-50 shadow bg-dark rounded-left">
        <img  class="w-100 h-100 rounded-left" src="<?= base_url('assets/img/background-login.jpg'); ?>" alt="background-login.jpg" style="border: 3px solid rgb(52, 58, 64)">
      </div>
      <div id="frm_login" class="w-50 shadow rounded-right bg-dark">
        <form class="" action="<?= base_url('Autentification/login'); ?>" method="post">
          <div class="container pt-3 pb-3 pr-4 pl-4">
            <div class="d-flex justify-content-center w-100">
              <div class="h3 font-weight-bold font-italic text-white text-center w-50 pt-1 pb-1">
                Log In
              </div>
            </div>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="mt-4 mb-4">
              <input class="form-control my_inpt h4 bg-dark rounded-0 border-right-0 border-top-0 border-left-0 text-center text-white" type="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
              <?= form_error('email', '<p class="text-danger pl-3 font-weight-bold">', '</p>'); ?>
              <input class="form-control my_inpt h4 bg-dark rounded-0 border-right-0 border-top-0 border-left-0 text-center text-white mt-4" type="password" name="pass" value="" placeholder="Password">
              <?= form_error('pass', '<p class="text-danger pl-3 font-weight-bold">', '</p>'); ?>
            </div>
            <a class="font-weight-bold text-light" href="#">Lupa password!</a>
            <button id="btn_login" class="btn w-100 mt-4 text-white font-weight-bold" type="submit" name="button">Login</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
