<?php 

class M_kategori extends CI_Model{

    public function hapus($id_kategori)
    {
        $this->db->where('id_kategori_buku', $id_kategori);
        $this->db->delete('tb_kategori_buku'); 
    }
}