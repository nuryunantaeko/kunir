<?php

class MAuth extends CI_Model
{
    public function login($username, $password)
    {
        $passwordHash = $this->db->get_where('tabel_admin',
            array('username' => $username))->row();
        $login = password_verify('password', $passwordHash->password);

        if ($login) {
            $loginData = array('username' => $username, 'login' => true);
            $this->session->set_userdata($loginData);
            return true;
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
    }
}