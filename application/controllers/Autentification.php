<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentification extends CI_Controller
{
  public function index()
  {
    if ($this->session->userdata('user')) {
      $data = [
        'judul' => $this->session->judul,
        'user' => $this->session->user
      ];
      $this->load->view('templates/header', $data);
      $this->load->view('dashboard/index');
      $this->load->view('templates/footer');
    } else {
      $data=[
        'judul' => 'Login',
      ];
      $this->load->view('login/index', $data);
    }
  }

  public function login()
  {
    $this->form_validation->set_rules('email', 'Alamat email', 'required', [
      'required' => 'Email harus diisi!'
    ]);
    $this->form_validation->set_rules('pass', 'Password', 'required',[
      'required' => 'Password harus diisi!'
    ]);
    if ($this->form_validation->run() == false) {
      $data['judul'] = 'Login';
      $data['user'] = '';
      //kata 'login' merupakan nilai dari variabel judul dalam array $data dikirimkan ke view aute_header
      $this->load->view('login/index', $data);
    } else {
      $this->verify();
    }
  }

  public function verify()
  {
    $email = htmlspecialchars($this->input->post('email', true));
    $password = $this->input->post('pass', true);
    $user = $this->ModelUser->cekData(['username' => $email])->row_array();
    if ($user) {
      if ($password == $user['password']) {
        $data = [
          'judul' => 'Dashboard',
          'user' => $user['username']
        ];
        $this->session->set_userdata($data);
        redirect('Account');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
        redirect('Autentification');
      }
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Alamat Email tidak valid!!</div>');
      redirect('Autentification');
    }
  }

  public function logout()
  {
    $data = [
      'judul' => $this->session->judul,
      'user' =>$this->session->user
    ];
    $this->session->unset_userdata($data);
    $this->session->sess_destroy();

    $data=[
      'judul' => 'Login',
    ];
    $this->load->view('login/index', $data);
  }

  public function registration()
  {

  }
}
