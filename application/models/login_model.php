<?php
class Login_model extends MY_Model
{
    public $_tabel = 'tb_divisi';

    public $form_rules = array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|xss_clean|required'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|xss_clean|required'
        ),
    );

    public function login($login)
    {
        $login = (object) $login;

        // Cari data divisi di DB.
        $where = array(
            'username' => $login->username,
            'password' => $login->password,
            // Hanya yang status pendaftaran masih aktif yang boleh login
            'status_pendaftaran' => '1',
        );
        $divisi = $this->get($where);

        if ($divisi) {
            // Buat data session jika login benar.
            $data_session = array(
                'nama_divisi' => $divisi->nama_divisi,
                'no_divisi' => $divisi->id,
                'login_status' => true,
                'user_level' => 'divisi',
            );
            $this->session->set_userdata($data_session);

            // Return true jika login sukses.
            return true;
        }

        // Return false jika login salah.
        return false;
    }

    public function logout()
    {
        $this->session->unset_userdata(
            array(
                'nama_divisi' => '',
                'no_divisi' => '',
                'login_status' => false,
                'user_level' => ''
            )
        );
        $this->session->sess_destroy();
    }
}