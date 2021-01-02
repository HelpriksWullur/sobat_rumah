<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
  public function index()
  {
    $data=[
      'judul' => $this->session->judul,
      'user' => $this->session->user,
      'katalog' => $this->ModelProduk->getKatalog()->result_array()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('dashboard/index', $data);
    $this->load->view('templates/footer');
  }

  public function transaksi()
  {
    $data=[
      'judul' => 'Transaksi',
      'user' => $this->session->user,
      'transaksi' => $this->ModelUser->getTransaksi($this->session->user)->result_array()
    ];

    $this->load->view('templates/header', $data);
    $this->load->view('transaksi/index', $data);
    $this->load->view('templates/footer');
  }

  public function beli()
  {
    $data=[
      'email' => $this->session->user,
      'nama_produk' => $this->input->post('nama_produk'),
      'jumlah_beli' => $this->input->post('jumlah_beli'),
      'total_bayar' => $this->input->post('harga_produk') * $this->input->post('jumlah_beli'),
    ];
    $this->ModelUser->pembelian($data);
    // $this->session->set_flashdata('notifikasi', '<div class="alert alert-success alert-message" role="alert">Pembelian Anda berhasil!!</div>');
    redirect('Account');
  }

  public function kategori($nama)
  {
    $data=[
      'judul' => $this->session->judul,
      'user' => $this->session->user,
      'katalog' => $this->ModelProduk->getKatalogBy($nama)->result_array()
    ];

    $this->load->view('templates/header', $data);
    $this->load->view('dashboard/index', $data);
    $this->load->view('templates/footer', $data);
  }
}
