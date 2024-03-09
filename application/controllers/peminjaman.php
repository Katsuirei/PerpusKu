<?php 

class Peminjaman extends CI_Controller{

    public function __construct()
    {
       parent:: __construct() ;
       $this->load->model('m_peminjaman');
    }

    public function index()
    {
        $this->m_security->get_security();
		$data['content'] = 'peminjaman/v_peminjaman';
		$data['judul']   = 'Peminjaman Buku';
		// $data['isi']   = $this->db->get('tb_peminjaman')->result();
        $data['isi'] = $this->m_peminjaman->get_data_peminjaman();
		$this->load->view('v_dashboard', $data);  
    }

    public function tambah_peminjaman()
    {
        $data['content'] = 'peminjaman/t_peminjaman';
		$data['judul']   = 'Tambah Peminjaman Buku';
		$data['buku']   = $this->db->get('tb_buku')->result();
        // $data['id_koleksi'] = $this->m_koleksi->id_koleksi();
		$this->load->view('v_dashboard', $data);  
    }

    public function simpan()
    {
        $data = array(
            'user_id' => $this->input->post('user_id'),
            'buku_id' => $this->input->post('buku_id'),
            'tgl_peminjaman' => $this->input->post('tgl_peminjaman'),
            'tgl_pengembalian' => $this->input->post('tgl_pengembalian')
        );
        $query = $this->db->insert('tb_peminjaman', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data transaksi berhasil disimpan!');
            redirect('index.php/peminjaman');
        }
    }

    public function edit($id_peminjaman)
    {
        $data['content'] = 'peminjaman/e_peminjaman';
		$data['judul']   = 'Edit Peminjaman Buku';
        $data['isi'] = $this->m_peminjaman->edit($id_peminjaman);
		$this->load->view('v_dashboard', $data);   
    }

    public function update()
    {
        $id_peminjaman = $this->input->post('id_peminjaman');
        $data = array(
            'id_peminjaman' => $this->input->post('id_peminjaman'),
            'user_id' => $this->input->post('user_id'),
            'buku_id' => $this->input->post('buku_id'),
            'tgl_peminjaman' => $this->input->post('tgl_peminjaman'),
            'tgl_pengembalian' => $this->input->post('tgl_pengembalian')
        );
        $query = $this->m_peminjaman->update($id_peminjaman, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil diubah!');
            redirect('index.php/peminjaman');
        }
    }

    public function hapus($id_peminjaman)
    {
        $query = $this->m_peminjaman->hapus($id_peminjaman);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus!');
            redirect('index.php/peminjaman');
        }
    }

    public function jumlah_buku()
    {
        $id = $this->input->post('id_buku');
        $isi = $this->m_peminjaman->jumlah_buku($id);
        echo json_encode($isi);
    }

    public function kembalikan($id)
    {
        $data = $this->m_peminjaman->get_data_id($id);
        $kembalikan = array(
            'user_id' => $data['user_id'],
            'buku_id' => $data['buku_id'],
            'tgl_peminjaman' => $data['tgl_peminjaman'],
            'tgl_pengembalian' => $data['tgl_pengembalian'],
            'tgl_dikembalikan' => date('Y-m-d')
        );
        $query = $this->db->insert('tb_pengembalian', $kembalikan);
        if ($query = true) {
            $delete = $this->m_peminjaman->delete($id);
            if ($delete = true) {
                $this->session->set_flashdata('info', 'Buku berhasi dikembalikan.');
                redirect('index.php/peminjaman');
            }
        }
    }
}