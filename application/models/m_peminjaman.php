<?php 

class M_peminjaman extends CI_Model{

    public function edit($id_peminjaman)
    {
        $this->db->where('id_peminjaman', $id_peminjaman);
        return $this->db->get('tb_peminjaman')->row_array();
    }

    public function update($id_peminjaman, $data)
    {
        $this->db->where('id_peminjaman', $id_peminjaman);
        $this->db->update('tb_peminjaman', $data);
    }

    public function hapus($id_peminjaman)
    {
        $this->db->where('id_peminjaman', $id_peminjaman);
        $this->db->delete('tb_peminjaman'); 
    }

    public function jumlah_buku($id)
    {
        $this->db->select('jumlah');
        $this->db->from('tb_buku');
        $this->db->where('id_buku', $id);
        return $this->db->get()->row_array();
    }

    public function get_data_peminjaman()
    {
        $this->db->select('*');
        $this->db->from('tb_peminjaman');
        $this->db->join('tb_buku', 'tb_peminjaman.buku_id = tb_buku.judul');
        return $this->db->get()->result(); 
    }

    public function get_data_id($id)
    {
        $this->db->select('*');
        $this->db->from('tb_peminjaman');
        $this->db->join('tb_buku', 'tb_peminjaman.buku_id = tb_buku.judul');
        $this->db->where('tb_peminjaman.id_peminjaman', $id);
        return $this->db->get()->row_array();  
    }

    public function delete($id)
    {
        $this->db->where('id_peminjaman', $id);
        $this->db->delete('tb_peminjaman');
    }
}