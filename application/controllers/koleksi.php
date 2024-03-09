<?php 

class Koleksi extends CI_Controller{

    public function __construct()
    {
       parent:: __construct() ;
       $this->load->model('m_koleksi');
    }

    public function index()
    {
        $this->m_security->get_security();
		$data['content'] = 'koleksi/v_koleksi';
		$data['judul']   = 'Koleksi Pribadi';
		$data['isi']   = $this->db->get('tb_koleksi_pribadi')->result();
		$this->load->view('v_dashboard', $data);  
    }

    public function tambah_koleksi()
    {
        $data['content'] = 'koleksi/t_koleksi';
		$data['judul']   = 'Tambah Koleksi Pribadi';
        // $data['id_koleksi'] = $this->m_koleksi->id_koleksi();
		$this->load->view('v_dashboard', $data);  
    }

    public function simpan()
    {
        $data = array(
            'user_id' => $this->input->post('user_id'),
            'buku_id' => $this->input->post('buku_id')
        );
        $query = $this->db->insert('tb_koleksi_pribadi', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan!');
            redirect('index.php/koleksi');
        }
    }

    public function edit($id_koleksi)
    {
        $data['content'] = 'koleksi/e_koleksi';
		$data['judul']   = 'Edit Koleksi Pribadi';
        $data['isi'] = $this->m_koleksi->edit($id_koleksi);
		$this->load->view('v_dashboard', $data);   
    }

    public function update()
    {
        $id_koleksi = $this->input->post('id_koleksi_pribadi');
        $data = array(
            'id_koleksi_pribadi' => $this->input->post('id_koleksi_pribadi'),
            'user_id' => $this->input->post('user_id'),
            'buku_id' => $this->input->post('buku_id')
        );
        $query = $this->m_koleksi->update($id_koleksi, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil diubah!');
            redirect('index.php/koleksi');
        }
    }

    public function hapus($id_koleksi)
    {
        $query = $this->m_koleksi->hapus($id_koleksi);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus!');
            redirect('index.php/koleksi');
        }
    }
}