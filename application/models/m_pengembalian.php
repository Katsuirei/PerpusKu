<?php 

class M_pengembalian extends CI_Model{

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tb_pengembalian');
        $this->db->join('tb_buku', 'tb_pengembalian.buku_id = tb_buku.judul');
        return $this->db->get()->result();
    }

}
