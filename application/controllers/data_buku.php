<?php 

class Data_buku extends CI_Controller{

    public function __construct()
    {
       parent:: __construct() ;
       $this->load->model('m_data_buku');
    }

    public function index()
    {
        $this->m_security->get_security();
		$data['content'] = 'buku/v_buku';
		$data['judul']   = 'Data Buku';
		// $data['isi']   = $this->db->get('tb_buku')->result();
		$data['isi']   = $this->m_data_buku->get_data_buku();
		$this->load->view('v_dashboard', $data);  
    }

    public function tambah_buku()
    {
        $data['content'] = 'buku/t_buku';
		$data['judul']   = 'Tambah Data Buku';
		$data['kategori']   = $this->db->get('tb_kategori_buku')->result();
        $data['id_buku'] = $this->m_data_buku->id_buku();
		$this->load->view('v_dashboard', $data);  
    }

    public function simpan()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'judul' => $this->input->post('judul'),
            'kategori_id' => $this->input->post('kategori_id'),
            'penulis' => $this->input->post('penulis'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'jumlah' => $this->input->post('jumlah')
        );
        $query = $this->db->insert('tb_buku', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan!');
            redirect('index.php/data_buku');
        }
    }

    public function edit($id)
    {
        $data['content'] = 'buku/e_buku';
		$data['judul']   = 'Edit Data Buku';
        $data['kategori']   = $this->db->get('tb_kategori_buku')->result();
        $data['isi'] = $this->m_data_buku->edit($id);
		$this->load->view('v_dashboard', $data);   
    }

    public function update()
    {
        $id_buku = $this->input->post('id_buku');
        $data = array(
            'id_buku' => $this->input->post('id_buku'),
            'id' => $this->input->post('id'),
            'judul' => $this->input->post('judul'),
            'kategori_id' => $this->input->post('kategori_id'),
            'penulis' => $this->input->post('penulis'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'jumlah' => $this->input->post('jumlah')
        );
        $query = $this->m_data_buku->update($id_buku, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil diubah!');
            redirect('index.php/data_buku');
        }
    }

    public function hapus($id_buku)
    {
        $query = $this->m_data_buku->hapus($id_buku);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus!');
            redirect('index.php/data_buku');
        }
    }
}