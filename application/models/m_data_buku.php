<?php 

class M_data_buku extends CI_Model{

    public function id_buku()
    {
        $this->db->select('RIGHT(tb_buku.id,3) as kode', FALSE);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_buku');
        if ($query->num_rows()<>0) {
            $data = $query->row();
            $kode = intval($data->kode)+1;
        } else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodejadi = "BK".$kodemax;
        return $kodejadi;

    }

    // public function edit($id)
    // {
    //     $this->db->where('id_buku', $id);
    //     return $this->db->get('tb_buku')->row_array();
    // }
    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('tb_buku');
        $this->db->join('tb_kategori_buku', 'tb_buku.kategori_id = tb_kategori_buku.nama_kategori');
        $this->db->where('tb_buku.id_buku', $id);
        return $this->db->get()->row_array();
    }

    public function get_data_buku()
    {
        $this->db->select('*');
        $this->db->from('tb_buku');
        $this->db->join('tb_kategori_buku', 'tb_buku.kategori_id = tb_kategori_buku.nama_kategori');
        return $this->db->get();
    }


    public function update($id_buku, $data)
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->update('tb_buku', $data);
    }

    public function hapus($id_buku)
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->delete('tb_buku'); 
    }
}