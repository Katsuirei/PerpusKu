<?php 

class M_laporan extends CI_Model{

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tb_peminjaman');
        $this->db->join('tb_buku', 'tb_peminjaman.buku_id = tb_buku.judul');
        return $this->db->get()->result(); 
    }

    public function filter_data($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('tb_peminjaman');
        $this->db->join('tb_buku', 'tb_peminjaman.buku_id = tb_buku.judul');
        $this->db->where('tb_peminjaman.tgl_peminjaman >=', $tgl_awal);
        $this->db->where('tb_peminjaman.tgl_pengembalian <=', $tgl_akhir);
        return $this->db->get()->result(); 
    }
}