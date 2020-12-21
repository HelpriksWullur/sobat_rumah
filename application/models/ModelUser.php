<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
  public function cekData($where = null)
  {
    return $this->db->get_where('user', $where);
  }

  public function tambahUser($data = null)
  {
    $this->db->insert('user', $data);
  }

  public function getTransaksi($where = null)
  {
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->where('email', $where);
    return $this->db->get();
  }

  public function pembelian($data = null)
  {
    $this->db->insert('transaksi', $data);
  }
}
