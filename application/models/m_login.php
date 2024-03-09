<?php 

class M_login extends CI_Model{

    public function proses_login($user, $pass)
    {
        // $password = md5($pass);
        $password = $pass;
        $user = $this->db->where('username', $user);
        $pass = $this->db->where('password', $password);
        $query = $this->db->get('tb_user');
        if ($query->num_rows()>0){
            foreach ($query->result() as $row) {
                $sess = array(
                    'id_user'       => $row->id_user,
                    'username'      => $row->username,
                    'password'      => $row->password,
                    'nama_lengkap'  => $row->nama_lengkap,
                    'email'         => $row->email,
                    'level'         => $row->level
                );
                $this->session->set_userdata($sess);
            }
            redirect('index.php/dashboard');
        } else{
            $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Login Gagal, Silahkan periksa Username dan Password Anda!</div>');
            redirect('index.php/login');
        }
    }
}