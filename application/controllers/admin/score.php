<?php
class Score extends Admin_Controller
{
    public $data = array(
        'halaman' => 'score',
        'main_view' => 'admin/score_list',
        'title' => 'Data Score',
    );

    // Perlu mendefisikan ulang, karena lokasi model tidak standar
    // yaitu di bawah folder "admin" -> model/admin
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/score_model', 'score');
    }

    public function index($offset = 0)
    {
        $score = $this->score->get_all_paged($offset);
        if ($score) {
            $this->data['score'] = $score;
            $this->data['paging'] = $this->score->paging('biasa', site_url('admin/score/halaman/'), 4);
        } else {
            $this->data['score'] = 'Tidak ada data score.';
        }
        $this->load->view($this->layout, $this->data);
    }

     public function cari($offset = 0)
    {
        $score = $this->score->cari($offset);
        if ($score) {
            $this->data['score'] = $score;
            $this->data['paging'] = $this->score->paging('pencarian', site_url('admin/score/cari/'), 4);
        } else {
            $this->data['score'] = 'Data tidak ditemukan.'. anchor('admin/score', ' Tampilkan semua score.', 'class="alert-link"');
        }
        $this->load->view($this->layout, $this->data);
    }
    
    public function tambah()
    {
        $this->data['main_view'] = 'admin/score_form';
        $this->data['form_action'] = site_url('admin/score/tambah');

        // Data untuk form.
        if (! $_POST) {
            $score = (object) $this->score->default_value;
        } else {
            $score = $this->input->post(null, true);
        }

        // Validasi.
        if (! $this->score->validate('form_rules')) {
            $this->data['values'] = (object) $score;
            $this->load->view($this->layout, $this->data);
            return;
        }

        // Simpan ke DB.
        if ($this->score->tambah($score)) {
            $this->session->set_flashdata('pesan', 'scorecard berhasil disimpan. Kembali ke halaman ' . anchor('admin/score', 'scorecard.', 'class="alert-link"'));
            redirect('admin/score/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'scorecard gagal disimpan. Kembali ke halaman ' . anchor('admin/score', 'scorecard.', 'class="alert-link"'));
            redirect('admin/score/error');
        }
    }

    public function edit($id = null)
    {
        // Pastikan data score ada.
        $score = $this->score->get($id);
        if (! $score) {
            $this->session->set_flashdata('pesan_error', 'Data scorecard tidak ada. Kembali ke halaman ' . anchor('admin/score', 'scorecard.', 'class="alert-link"'));
            redirect('admin/score/error');
        }

        // Data untuk form.
        if (!$_POST) {
            $data = (object) $score;
        } else {
            $data = (object) $this->input->post(null, true);
        }
        $this->data['values'] = $data;

        // Validasi.
        if (! $this->score->validate('form_rules')) {
            $this->data['main_view'] = 'admin/score_form';
            $this->data['form_action'] = site_url('admin/score/edit/'.$id);
            $this->load->view($this->layout, $this->data);
            return;
        }

        // Simpan score.
        if ($this->score->edit($id, $data)) {
            $this->session->set_flashdata('pesan', 'scorecard berhasil disimpan. Kembali ke halaman ' . anchor('admin/score', 'scorecard.', 'class="alert-link"'));
            redirect('admin/score/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'scorecard berhasil disimpan. Kembali ke halaman ' . anchor('admin/score', 'scorecard.', 'class="alert-link"'));
            redirect('admin/score/error');
        }
    }

    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'Data score';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'Data score';
        $this->load->view($this->layout, $this->data);
    }

    public function hapus($id)
    {
        // Pastikan data score ada.
        if (! $this->score->get($id)) {
            $this->session->set_flashdata('pesan_error', 'Data scorecard tidak ada. Kembali ke halaman ' . anchor('admin/score', 'scorecard.', 'class="alert-link"'));
            redirect('admin/score/error');
        }

        // Hapus
        if ($this->score->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus. Kembali ke halaman '. anchor('admin/score', 'scorecard.', 'class="alert-link"'));
            redirect('admin/score/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'Data gagal dihapus. Kembali ke halaman '. anchor('admin/score', 'scorecard.', 'class="alert-link"'));
            redirect('admin/score/error');
        }
    }

     // Kode Divisi
    public function _kode_divisi_fk()
    {
        $divisi_code = $this->input->post('kode_divisi_fk');
        if ($divisi_code != '') {
            return true;
        } else {
            $this->form_validation->set_message('_kode_divisi_fk', "Kode divisi harus diisi.");
            return false;
        }
    }

    // Kalau kode divisi = "lainnya", keterangan Kode divisi harus diisi
    public function _kode_ket_divisi_fk()
    {
        $divisi_code = $this->input->post('kode_divisi_fk');
        $ket_divisi_code = $this->input->post('kode_ket_divisi_fk');
        if ($divisi_code != '0') {
            // Kalau kode divisi dipilih, maka keterangan kode divisi harus dikosongkan
            if (! empty($ket_divisi_code)) {
                $this->form_validation->set_message('_kode_ket_divisi_fk', "Karena kode divisi sudah dipilih, maka kolom keterangan kode divisi harus dikosongkan.");
                return false;
            } else {
                return true;
            }
        } else {
            if (empty($ket_divisi_code)) {
                $this->form_validation->set_message('_kode_ket_divisi_fk', "Karena kode divisi adalah 'lainnya', maka kolom keterangan kode divisi harus diisi.");
                return false;
            } else {
                return true;
            }
        }
    }

    // Kode Scorecard
    public function _kode_scorecard()
    {
        $scorecard_code = $this->input->post('kode_scorecard');
        if ($scorecard_code != '') {
            return true;
        } else {
            $this->form_validation->set_message('_kode_scorecard', "Kode scorecard harus diisi.");
            return false;
        }
    }

    // Kalau kode scorecard = "lainnya", keterangan Kode scorecard harus diisi
    public function _kode_ket_scorecard()
    {
        $scorecard_code = $this->input->post('kode_scorecard');
        $ket_scorecard_code = $this->input->post('kode_ket_scorecard');
        if ($scorecard_code != '0') {
            // Kalau kode scorecard dipilih, maka keterangan kode scorecard harus dikosongkan
            if (! empty($ket_scorecard_code)) {
                $this->form_validation->set_message('_kode_ket_scorecard', "Karena kode scorecard sudah dipilih, maka kolom keterangan kode scorecard harus dikosongkan.");
                return false;
            } else {
                return true;
            }
        } else {
            if (empty($ket_scorecard_code)) {
                $this->form_validation->set_message('_kode_ket_scorecard', "Karena kode scorecard adalah 'lainnya', maka kolom keterangan kode scorecard harus diisi.");
                return false;
            } else {
                return true;
            }
        }
    }

    // Kolom "password" harus diisi hanya untuk proses tambah.
    // Jika "id" ada di URL (edit), maka password tidak "required"
}