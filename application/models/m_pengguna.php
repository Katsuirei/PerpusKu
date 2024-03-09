<?php 

class M_pengguna extends CI_Model{

    public function id_pengguna()
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

    public function edit($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->get('tb_user')->row_array();
    }

    public function update($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        $this->db->update('tb_user', $data);
    }

    public function hapus($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('tb_user'); 
    }
}