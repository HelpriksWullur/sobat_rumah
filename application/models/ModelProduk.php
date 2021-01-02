<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelProduk extends CI_Model
{
  public function getKatalog()
  {
    $this->db->select('*');
    $this->db->from('produk');
    return $this->db->get();
  }

  public function getKatalogBy($where = null)
  {
    $this->db->select('*');
    $this->db->from('produk');
    $this->db->where('kategori_produk', $where);
    return $this->db->get();
  }
}
