<?php 

class Laporan extends CI_Controller{

    public function __construct()
    {
       parent:: __construct() ;
       $this->load->model('m_laporan');
    //    $this->load->library('pdf_report.php');
 
    }

    public function peminjaman()
    {
        $this->m_security->get_security();
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $this->session->set_userdata('tanggal_awal', $tgl_awal);
        $this->session->set_userdata('tanggal_akhir', $tgl_akhir);

        if (empty($tgl_awal) || empty($tgl_akhir)) {
            $data['content'] = 'laporan/v_laporan';
            $data['judul']   = 'Laporan Peminjaman Buku';
            $data['isi']   = $this->m_laporan->get_all_data();
            
        }else{
            $data['content'] = 'laporan/v_laporan';
            $data['judul']   = 'Laporan Peminjaman Buku';  
            $data['isi']   = $this->m_laporan->filter_data($tgl_awal, $tgl_akhir);

        }
        $this->load->view('v_dashboard', $data);  
    }

    public function view_pdf()
    {
        if (empty($this->session->userdata('tanggal_awal')) || empty($this->session->userdata('tanggal_akhir'))){
            $data['isi'] = $this->m_laporan->get_all_data();
            $this->load->view('index.php/laporan/pdf_peminjaman', $data);
        }else{
            $data['isi'] = $this->m_laporan->filter_data($this->session->userdata('tanggal_awal'), $this->session->userdata('tanggal_akhir'));
            $this->load->view('index.php/laporan/pdf_peminjaman', $data);
        }
    }
}