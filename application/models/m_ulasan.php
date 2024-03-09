<?php 

class M_ulasan extends CI_Model{

    public function edit($id_ulasan)
    {
        $this->db->where('id_ulasan_buku', $id_ulasan);
        return $this->db->get('tb_ulasan_buku')->row_array();
    }

    public function update($id_ulasan, $data)
    {
        $this->db->where('id_ulasan_buku', $id_ulasan);
        $this->db->update('tb_ulasan_buku', $data);
    }

    public function hapus($id_ulasan)
    {
        $this->db->where('id_ulasan_buku', $id_ulasan);
        $this->db->delete('tb_ulasan_buku'); 
    }
}