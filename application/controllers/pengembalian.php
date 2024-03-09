<?php 

class Pengembalian extends CI_Controller{

    public function index()
    {
        $this->m_security->get_security();
		$data['content'] = 'pengembalian/v_pengembalian';
		$data['judul']   = 'Pengembalian Buku';
        $this->load->model('m_pengembalian');
		// $data['isi']   = $this->db->get('tb_peminjaman')->result();
		$data['isi']   = $this->m_pengembalian->get_all_data();
        // $data['isi'] = $this->m_pengembalian->get_data_pengembalian();
		$this->load->view('v_dashboard', $data);  
    }
}