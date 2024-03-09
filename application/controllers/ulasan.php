<?php 

class Ulasan extends CI_Controller{

    public function __construct()
    {
       parent:: __construct() ;
       $this->load->model('m_ulasan');
    }

    public function index()
    {
        $this->m_security->get_security();
		$data['content'] = 'ulasan/v_ulasan';
		$data['judul']   = 'Ulasan Buku';
		$data['isi']   = $this->db->get('tb_ulasan_buku')->result();
		$this->load->view('v_dashboard', $data);  
    }

    public function tambah_ulasan()
    {
        $data['content'] = 'ulasan/t_ulasan';
		$data['judul']   = 'Tambah Ulasan Buku';
        // $data['id_koleksi'] = $this->m_koleksi->id_koleksi();
		$this->load->view('v_dashboard', $data);  
    }

    public function simpan()
    {
        $data = array(
            'user_id' => $this->input->post('user_id'),
            'buku_id' => $this->input->post('buku_id'),
            'ulasan' => $this->input->post('ulasan'),
            'rating' => $this->input->post('rating')
        );
        $query = $this->db->insert('tb_ulasan_buku', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan!');
            redirect('index.php/ulasan');
        }
    }

    public function edit($id_ulasan)
    {
        $data['content'] = 'ulasan/e_ulasan';
		$data['judul']   = 'Edit Ulasan Buku';
        $data['isi'] = $this->m_ulasan->edit($id_ulasan);
		$this->load->view('v_dashboard', $data);   
    }

    public function update()
    {
        $id_ulasan = $this->input->post('id_ulasan_buku');
        $data = array(
            'id_ulasan_buku' => $this->input->post('id_ulasan_buku'),
            'user_id' => $this->input->post('user_id'),
            'buku_id' => $this->input->post('buku_id'),
            'ulasan' => $this->input->post('ulasan'),
            'rating' => $this->input->post('rating')
        );
        $query = $this->m_ulasan->update($id_ulasan, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil diubah!');
            redirect('index.php/ulasan');
        }
    }

    public function hapus($id_ulasan)
    {
        $query = $this->m_ulasan->hapus($id_ulasan);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus!');
            redirect('index.php/ulasan');
        }
    }
}