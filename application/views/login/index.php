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
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.cookie.js'); ?>"></script>
  </head>
  <body style="background-color: rgb(164, 160, 160)">
    <div class="container-fluid">
      <div class="container frm-login-signup row">
        <div id="img-logup" class="w-25 rounded-left" style="height: 23.4rem">
          <img class="w-100 h-100 rounded-left" src="<?= base_url('assets/img/background-login.jpg'); ?>" alt="">
        </div>
        <div id="frm-logup" class="w-25 bg-dark rounded-right">
          <div class="w-100 h-100 text-white">
            <div class="d-flex justify-content-around align-items-center row">
              <input class="d-none btn-check" id="opt-login" type="radio" name="login-signup" value="" autocomplete="off" checked>
              <label class="btn btn-secondary lbl-login border-0 bg-transparent font-weight-bold" for="opt-login">Log In</label>
              <input class="d-none btn-check" id="opt-signup" type="radio" name="login-signup" value="" type="radio" name="login-signup" value="" autocomplete="off">
              <label class="btn btn-secondary lbl-signup border-0 bg-transparent font-weight-bold" for="opt-signup" style="font-size: 1rem">Sign Up</label>
            </div>
            <form id="frm-login" class="pr-4 pl-4 pt-2 pb-4" action="<?= base_url('Autentification/login'); ?>" method="post">
              <?= $this->session->flashdata('pesan'); ?>
              <input class="form-control mb-4 bg-dark border-right-0 border-left-0 border-top-0 rounded-0 text-white text-center" type="text" name="email" value="<?= set_value('email'); ?>" placeholder="Email" style="font-size: 1.5rem">
              <?= form_error('email', '<p class="text-danger pl-3 font-weight-bold">', '</p>'); ?>
              <input class="form-control mb-5 bg-dark border-right-0 border-left-0 border-top-0 rounded-0 text-white text-center" type="password" name="pass" value="" placeholder="Password" style="font-size: 1.5rem">
              <?= form_error('pass', '<p class="text-danger pl-3 font-weight-bold">', '</p>'); ?>
              <a class="text-white font-weight-bold mb-2" href="#" style="font-size: 1.2rem">Lupa Password!</a>
              <button class="btn btn-primary w-100 mt-3 font-weight-bold" type="submit" name="button" style="font-size: 1.4rem">Masuk</button>
            </form>
            <form id="frm-signup" class="pr-4 pl-4 pt-1 pb-4" action="<?= base_url('Autentification/registration'); ?>" method="post">
              <?= $this->session->flashdata('pesanBaru'); ?>
              <input class="form-control mb-4 bg-dark border-right-0 border-left-0 border-top-0 rounded-0 text-white text-center" type="text" name="emailBaru" value="" placeholder="Email" style="font-size: 1.5rem">
              <?= form_error('emailBaru', '<p class="text-danger pl-3 font-weight-bold">', '</p>'); ?>
              <input class="form-control mb-4 bg-dark border-right-0 border-left-0 border-top-0 rounded-0 text-white text-center" type="password" name="passBaru" value="" placeholder="Password" style="font-size: 1.5rem">
              <?= form_error('passBaru', '<p class="text-danger pl-3 font-weight-bold">', '</p>'); ?>
              <input class="form-control mb-4 bg-dark border-right-0 border-left-0 border-top-0 rounded-0 text-white text-center" type="password" name="passconf" value="" placeholder="Verifikasi Password" style="font-size: 1.5rem">
              <?= form_error('passconf', '<p class="text-danger pl-3 font-weight-bold">', '</p>'); ?>
              <button class="btn btn-primary w-100 mt-3 font-weight-bold" type="submit" name="button" style="font-size: 1.4rem">Daftar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
    $(document).ready(function(){
      if (!!$.cookie('state')) {
        if ($.cookie('state') == 'signup') {
          $(".lbl-signup").css('font-size', '2.5rem');
          $(".lbl-login").css('font-size', '1.5rem');
          $("#frm-signup").removeClass('hide');
          $("#frm-login").addClass('hide');
        } else if ($.cookie('state') == 'login') {
          $(".lbl-signup").css('font-size', '1.5rem');
          $(".lbl-login").css('font-size', '2.5rem');
          $("#frm-signup").addClass('hide');
          $("#frm-login").removeClass('hide');
          }
        } else {
          $(".lbl-login").css('font-size', '2.5rem');
          $("#frm-signup").addClass('hide');
          $.cookie('state', 'login');
        }
      $('.btn-check').click(function() {
        if ($('#opt-signup').is(':checked')) {
          $(".lbl-signup").css('font-size', '2.5rem');
          $(".lbl-login").css('font-size', '1.5rem');
          $("#frm-signup").removeClass('hide');
          $("#frm-login").addClass('hide');
          $.cookie('state', 'signup')
        } else {
          $(".lbl-signup").css('font-size', '1.5rem');
          $(".lbl-login").css('font-size', '2.5rem');
          $("#frm-signup").addClass('hide');
          $("#frm-login").removeClass('hide');
          $.cookie('state', 'login')
        }
      });
    });
    </script>
  </body>
</html>
