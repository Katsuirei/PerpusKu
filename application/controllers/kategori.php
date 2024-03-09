<?php 

class Kategori extends CI_Controller{

    public function __construct()
    {
       parent:: __construct() ;
       $this->load->model('m_kategori');
    }

    public function index()
    {
        $this->m_security->get_security();
		$data['content'] = 'kategori/v_kategori';
		$data['judul']   = 'Kategori Buku';
		$data['isi']   = $this->db->get('tb_kategori_buku')->result();
		$this->load->view('v_dashboard', $data);  
    }

    public function tambah_kategori()
    {
        $data['content'] = 'kategori/t_kategori';
		$data['judul']   = 'Tambah Kategori Buku';
        // $data['id_koleksi'] = $this->m_koleksi->id_koleksi();
		$this->load->view('v_dashboard', $data);  
    }

    public function simpan()
    {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $query = $this->db->insert('tb_kategori_buku', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan!');
            redirect('index.php/kategori');
        }
    }

    public function hapus($id_kategori)
    {
        $query = $this->m_kategori->hapus($id_kategori);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus!');
            redirect('index.php/kategori');
        }
    }
}