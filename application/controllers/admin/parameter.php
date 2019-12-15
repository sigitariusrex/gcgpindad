<?php
class Parameter extends Admin_Controller
{
    public $data = array(
        'halaman' => 'parameter',
        'main_view' => 'admin/parameter_list',
        'title' => 'Data Parameter',
    );

    // Perlu mendefisikan ulang, karena lokasi model tidak standar
    // yaitu di bawah folder "admin" -> model/admin
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/parameter_model', 'parameter');
    }

    public function index($offset = 0)
    {
        $parameter = $this->parameter->get_all_paged($offset);
        if ($parameter) {
            $this->data['parameter'] = $parameter;
            $this->data['paging'] = $this->parameter->paging('biasa', site_url('admin/parameter/halaman/'), 4);
        } else {
            $this->data['parameter'] = 'Tidak ada data parameter.';
        }

        if (!$_POST) {
            $data = (object) $parameter;
        } else {
            $data = (object) $this->input->post(null, true);
        }

         

        $this->load->view($this->layout, $this->data);
    }

    public function cari($offset = 0)
    {
        $parameter = $this->parameter->cari($offset);
        if ($parameter) {
            $this->data['parameter'] = $parameter;
            $this->data['paging'] = $this->parameter->paging('pencarian', site_url('admin/parameter/cari/'), 4);
        } else {
            $this->data['parameter'] = 'Data tidak ditemukan.'. anchor('admin/parameter', ' Tampilkan semua parameter.', 'class="alert-link"');
        }
        $this->load->view($this->layout, $this->data);
    }

    public function tambah()
    {
        $this->data['main_view'] = 'admin/parameter_form';
        $this->data['form_action'] = site_url('admin/parameter/tambah');

        // Data untuk form.
        if (! $_POST) {
            $parameter = (object) $this->parameter->default_value;
        } else {
            $parameter = $this->input->post(null, true);
        }

        // Validasi.
        if (! $this->parameter->validate('form_rules')) {
            $this->data['values'] = (object) $parameter;
            $this->load->view($this->layout, $this->data);
            return;
        }

        // Simpan ke DB.
        if ($this->parameter->tambah($parameter)) {
            $this->session->set_flashdata('pesan', 'parameter berhasil disimpan. Kembali ke halaman ' . anchor('admin/parameter', 'parameter.', 'class="alert-link"'));
            redirect('admin/parameter/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'parameter gagal disimpan. Kembali ke halaman ' . anchor('admin/parameter', 'parameter.', 'class="alert-link"'));
            redirect('admin/parameter/error');
        }
    }

    public function edit($id = null)
    {
        // Pastikan data parameter ada.
        $parameter = $this->parameter->get($id);
        if (! $parameter) {
            $this->session->set_flashdata('pesan_error', 'Data parameter tidak ada. Kembali ke halaman ' . anchor('admin/parameter', 'parameter.', 'class="alert-link"'));
            redirect('admin/parameter/error');
        }

        // Data untuk form.
        if (!$_POST) {
            $data = (object) $parameter;
        } else {
            $data = (object) $this->input->post(null, true);

        }

      
        
        $this->data['values'] = $data;

        // Validasi.
        if (! $this->parameter->validate('form_rules')) {
            $this->data['main_view'] = 'admin/parameter_form';
            $this->data['form_action'] = site_url('admin/parameter/edit/'.$id);
            $this->load->view($this->layout, $this->data);
            return;
        }

        // Simpan parameter.
        if ($this->parameter->edit($id, $data)) {
            $this->session->set_flashdata('pesan', 'parameter berhasil disimpan. Kembali ke halaman ' . anchor('admin/parameter', 'parameter.', 'class="alert-link"'));
            redirect('admin/parameter/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'parameter berhasil disimpan. Kembali ke halaman ' . anchor('admin/parameter', 'parameter.', 'class="alert-link"'));
            redirect('admin/parameter/error');
        }
    }

    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'Data Parameter';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'Data Parameter';
        $this->load->view($this->layout, $this->data);
    }

    public function hapus($id)
    {
        // Pastikan data parameter ada.
        if (! $this->parameter->get($id)) {
            $this->session->set_flashdata('pesan_error', 'Data parameter tidak ada. Kembali ke halaman ' . anchor('admin/parameter', 'parameter.', 'class="alert-link"'));
            redirect('admin/parameter/error');
        }

        // Hapus
        if ($this->parameter->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus. Kembali ke halaman '. anchor('admin/parameter', 'parameter.', 'class="alert-link"'));
            redirect('admin/parameter/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'Data gagal dihapus. Kembali ke halaman '. anchor('admin/parameter', 'parameter.', 'class="alert-link"'));
            redirect('admin/parameter/error');
        }
    }

     // Kode Scorecard
    public function _kode_scorecard_fk()
    {
        $scorecard_code = $this->input->post('kode_scorecard_fk');
        if ($scorecard_code != '') {
            return true;
        } else {
            $this->form_validation->set_message('_kode_scorecard_fk', "Kode scorecard harus diisi.");
            return false;
        }
    }

    // Kalau kode scorecard = "lainnya", keterangan Kode scorecard harus diisi
    public function _kode_ket_scorecard()
    {
        $scorecard_code = $this->input->post('kode_scorecard_fk');
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

       // Kode Scorecard
    public function _faktor_uji1()
    {
        $faktor_uji1_code = $this->input->post('_faktor_uji1');
        if ($faktor_uji1_code != '') {
            return true;
        } else {
            $this->form_validation->set_message('_faktor_uji1', "Kode scorecard harus diisi.");
            return false;
        }
    }

     // Kalau kode scorecard = "lainnya", keterangan Kode scorecard harus diisi
    public function _kode_ket_faktor_uji1()
    {
        $faktor_uji1_code = $this->input->post('kode_faktor_uji1');
        $ket_faktor_uji1_code = $this->input->post('kode_ket_faktor_uji1');
        if ($faktor_uji1_code != '0') {
            // Kalau kode scorecard dipilih, maka keterangan kode scorecard harus dikosongkan
            if (! empty($ket_faktor_uji1_code)) {
                $this->form_validation->set_message('_kode_ket_faktor_uji1', "Karena kode scorecard sudah dipilih, maka kolom keterangan kode scorecard harus dikosongkan.");
                return false;
            } else {
                return true;
            }
        } else {
            if (empty($ket_faktor_uji1_code)) {
                $this->form_validation->set_message('_kode_ket_faktor_uji1', "Karena kode scorecard adalah 'lainnya', maka kolom keterangan kode scorecard harus diisi.");
                return false;
            } else {
                return true;
            }
        }
    }

      // Kode Scorecard
    public function _faktor_uji2()
    {
        $faktor_uji2_code = $this->input->post('_faktor_uji2');
        if ($faktor_uji2_code != '') {
            return true;
        } else {
            $this->form_validation->set_message('_faktor_uji2', "Kode scorecard harus diisi.");
            return false;
        }
    }

     // Kalau kode scorecard = "lainnya", keterangan Kode scorecard harus diisi
    public function _kode_ket_faktor_uji2()
    {
        $faktor_uji2_code = $this->input->post('kode_faktor_uji2');
        $ket_faktor_uji2_code = $this->input->post('kode_ket_faktor_uji2');
        if ($faktor_uji2_code != '0') {
            // Kalau kode scorecard dipilih, maka keterangan kode scorecard harus dikosongkan
            if (! empty($ket_faktor_uji2_code)) {
                $this->form_validation->set_message('_kode_ket_faktor_uji2', "Karena kode scorecard sudah dipilih, maka kolom keterangan kode scorecard harus dikosongkan.");
                return false;
            } else {
                return true;
            }
        } else {
            if (empty($ket_faktor_uji2_code)) {
                $this->form_validation->set_message('_kode_ket_faktor_uji2', "Karena kode scorecard adalah 'lainnya', maka kolom keterangan kode scorecard harus diisi.");
                return false;
            } else {
                return true;
            }
        }
    }

    // Kolom "password" harus diisi hanya untuk proses tambah.
    // Jika "id" ada di URL (edit), maka password tidak "required"
}