<?php 

class M_dashboard extends CI_Model{

    public function count_user()
    {
        return $this->db->count_all('tb_user');
    }

    public function count_buku()
    {
        return $this->db->count_all('tb_buku');
    }

    public function count_pinjam()
    {
        return $this->db->count_all('tb_peminjaman');
    }

    public function count_kembali()
    {
        return $this->db->count_all('tb_pengembalian');
    }
}