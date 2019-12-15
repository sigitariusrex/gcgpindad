<?php
class Pendaftaran_model extends MY_Model
{
    public $_tabel = 'tb_divisi';

    public $form_rules = array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|xss_clean|required|max_length[10]|is_unique[tb_divisi.username]'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|xss_clean|required|max_length[10]|'
        ),
        array(
            'field' => 'nama_divisi',
            'label' => 'Nama Divisi',
            'rules' => 'trim|xss_clean|required|max_length[100]'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|xss_clean|required|max_length[30]|is_unique[tb_divisi.email]'
        ),
        array(
            'field' => 'captcha',
            'label' => 'Captcha',
            'rules' => 'trim|xss_clean|required|exact_length[4]|callback__validate_captcha'
        ),
    );

    public $default_values = array(
        'username' => '',
        'password' => '',
        'nama_divisi' => '',
        'email' => '',
        'captcha' => '',
    );

    public function daftar($divisi)
    {
        // Data captcha tidak perlu disimpan di DB.
        unset($divisi->captcha);

        // Generate random string kode_divisi untuk login user.
        $divisi->kode_divisi = random_string('numeric', 5);

        // Proses insert data ke tabel tb_divisi.
        $id = $this->insert($divisi);
        if ($id) {
            $no_divisi = format_no_divisi($id);

            // Set data untuk ditampilkan.
            $data_session = array(
                'nomor_divisi' => $no_divisi,
                'username' => $divisi->username,
                'nama_divisi' => $divisi->nama_divisi,
                'email' => $divisi->email,
                'kode_divisi' => $divisi->kode_divisi,

            );
            $this->session->set_userdata($data_session);
            return true;
        }
        return false;
    }

    public function reset_divisi()
    {
        $data_session = array(
            'nomor_divisi' => '',
            'username'  => '',
            'nama_divisi' => '',
            'email' => '',
            'kode_divisi' => '',
        );
        $this->session->unset_userdata($data_session);
    }
}