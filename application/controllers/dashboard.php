<?php 

class Dashboard extends CI_Controller {

    public function index()
	{
        $this->m_security->get_security();
		$data['content'] = 'v_home';
		$data['judul'] = 'Dashboard';
		$this->load->model('m_dashboard');
		$data['user']   = $this->m_dashboard->count_user();
		$data['buku']   = $this->m_dashboard->count_buku();
		$data['pinjam']   = $this->m_dashboard->count_pinjam();
		$data['kembali']   = $this->m_dashboard->count_kembali();
		$this->load->view('v_dashboard', $data);
	}
}
