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

    public function getAllUsers()
    {
        return $this->db->from('tabel_admin')
                        ->get()
                        ->result();
    }

    public function create()
    {
        $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        $data = array(
            'username' => $this->input->post('username'),
            'alamat' => $this->input->post('alamat'),
            'password' => $password,
            'no_hp' => $this->input->post('noHp')
        );

        $this->db->insert('tabel_admin', $data);
    }

    public function edit($id_user)
    {
        $data = array(            
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('noHp')
        );

        $this->db->where('id_admin', $id_user)
                 ->update('tabel_admin', $data);
    }

    public function getUser($id_user)
    {
        return $this->db->from('tabel_admin')
                        ->where('id_admin', $id_user)
                        ->get()
                        ->row();
    }

    public function delete($id_user)
    {
        $this->db->where('id_admin', $id_user)
                 ->delete('tabel_admin');
    }
}