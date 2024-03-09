<?php 

class M_koleksi extends CI_Model{

    public function edit($id_koleksi)
    {
        $this->db->where('id_koleksi_pribadi', $id_koleksi);
        return $this->db->get('tb_koleksi_pribadi')->row_array();
    }

    public function update($id_koleksi, $data)
    {
        $this->db->where('id_koleksi_pribadi', $id_koleksi);
        $this->db->update('tb_koleksi_pribadi', $data);
    }

    public function hapus($id_koleksi)
    {
        $this->db->where('id_koleksi_pribadi', $id_koleksi);
        $this->db->delete('tb_koleksi_pribadi'); 
    }
}