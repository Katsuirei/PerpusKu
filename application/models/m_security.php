<?php 

class M_security extends CI_Model{

    public function get_security()
    {
        $username = $this->session->userdata('username');
        if (empty($username)) {
            $this->session->sess_destroy();
            redirect('index.php/login');
        }
    }
}