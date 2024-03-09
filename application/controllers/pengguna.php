<?php 

class Pengguna extends CI_Controller{

    public function __construct()
    {
       parent:: __construct() ;
       $this->load->model('m_pengguna');
    }

    public function index()
    {
        $this->m_security->get_security();
		$data['content'] = 'pengguna/v_pengguna';
		$data['judul']   = 'Data Pengguna';
		$data['isi']   = $this->db->get('tb_user')->result();
		$this->load->view('v_dashboard', $data);  
    }

    public function tambah_pengguna()
    {
        $data['content'] = 'pengguna/t_pengguna';
		$data['judul']   = 'Tambah Data Pengguna';
        $data['id_pengguna'] = $this->m_pengguna->id_pengguna();
		$this->load->view('v_dashboard', $data);  
    }

    public function simpan()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'alamat' => $this->input->post('alamat'),
            'level' => $this->input->post('level')
        );
        $query = $this->db->insert('tb_user', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan!');
            redirect('index.php/pengguna');
        }
    }

    public function edit($id_user)
    {
        $data['content'] = 'pengguna/e_pengguna';
		$data['judul']   = 'Edit Data Pengguna';
        $data['isi'] = $this->m_pengguna->edit($id_user);
		$this->load->view('v_dashboard', $data);   
    }

    public function update()
    {
        $id_user = $this->input->post('id_user');
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'alamat' => $this->input->post('alamat'),
            'level' => $this->input->post('level')
        );
        $query = $this->m_pengguna->update($id_user, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil diubah!');
            redirect('index.php/pengguna');
        }
    }

    public function hapus($id_user)
    {
        $query = $this->m_pengguna->hapus($id_user);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus!');
            redirect('index.php/pengguna');
        }
    }
}