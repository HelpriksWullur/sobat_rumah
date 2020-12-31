<?php
class my404 extends CI_Controller
{

  public function index()
  {
    if ($this->session->user != NULL) {
      $data = [
        'judul' => '404 error (Halaman tidak ditemukan)',
        'user' => $this->session->user
      ];
    } else {
      $data = [
        'judul' => '404 error (Halaman tidak ditemukan)',
        'user' => "Guest"
      ];
    }
    $this->load->view('templates/header', $data);
    $this->load->view('err404');
    $this->load->view('templates/footer');
  }
}
