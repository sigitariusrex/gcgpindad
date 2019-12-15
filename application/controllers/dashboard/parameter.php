<?php
class Parameter extends Dashboard_Controller
{
    public $data = array(
        'halaman' => 'parameter',
        'main_view' => 'dashboard/parameter_list',
        'title' => 'Data Parameter',
    );

    // Perlu mendefisikan ulang, karena lokasi model tidak standar
    // yaitu di bawah folder "dashboard" -> model/dashboard
    public function __construct()
    {
        parent::__construct();
        $this->load->model('parameter_model', 'parameter');
    }

    public function index($offset = 0)
    {
        $parameter = $this->parameter->get_all_paged($offset);
        $this->data['parameter'] = 'Tidak ada data parameter.';
        
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
            $this->data['paging'] = $this->parameter->paging('pencarian', site_url('dashboard/parameter/cari/'), 4);
        } else {
            $this->data['parameter'] = 'Data tidak ditemukan.'. anchor('dashboard/parameter', ' Tampilkan semua parameter.', 'class="alert-link"');
        }
        $this->load->view($this->layout, $this->data);
    }

    public function cetak($id)
    {
        // Pastikan data parameter ada.
        $parameter = $this->parameter->get($id);
        if (! $parameter) {
            $this->session->set_flashdata('pesan_error', 'Data parameter tidak ada. Kembali ke halaman ' . anchor('dashboard/parameter', 'parameter.', 'class="alert-link"'));
            redirect('dashboard/parameter/error');
        }
        $data['parameter'] = $parameter;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/biodata_pdf', $data, true);
        // Nomor perserta (untuk nama file)
        $no_parameter = format_no_parameter($id);

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('biodata_'.$no_parameter.'.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Kembali ke halaman ' . anchor('dashboard/parameter', 'parameter.', 'class="alert-link"'));
            redirect('dashboard/parameter/error');
        }
    }

    public function tambah()
    {
        $this->data['main_view'] = 'dashboard/parameter_form';
        $this->data['form_action'] = site_url('dashboard/parameter/tambah');

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
            $this->session->set_flashdata('pesan', 'parameter berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/parameter', 'parameter.', 'class="alert-link"'));
            redirect('dashboard/parameter/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'parameter gagal disimpan. Kembali ke halaman ' . anchor('dashboard/parameter', 'parameter.', 'class="alert-link"'));
            redirect('dashboard/parameter/error');
        }
    }

    public function edit($id = null)
    {
        // Pastikan data parameter ada.
        $parameter = $this->parameter->get($id);
        if (! $parameter) {
            $this->session->set_flashdata('pesan_error', 'Data parameter tidak ada. Kembali ke halaman ' . anchor('dashboard/parameter', 'parameter.', 'class="alert-link"'));
            redirect('dashboard/parameter/error');
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
            $this->data['main_view'] = 'dashboard/parameter_form';
            $this->data['form_action'] = site_url('dashboard/parameter/edit/'.$id);
            $this->load->view($this->layout, $this->data);
            return;
        }

        // Simpan parameter.
        if ($this->parameter->edit($id, $data)) {
            $this->session->set_flashdata('pesan', 'parameter berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/parameter', 'parameter.', 'class="alert-link"'));
            redirect('dashboard/parameter/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'parameter berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/parameter', 'parameter.', 'class="alert-link"'));
            redirect('dashboard/parameter/error');
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
            $this->session->set_flashdata('pesan_error', 'Data parameter tidak ada. Kembali ke halaman ' . anchor('dashboard/parameter', 'parameter.', 'class="alert-link"'));
            redirect('dashboard/parameter/error');
        }

        // Hapus
        if ($this->parameter->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus. Kembali ke halaman '. anchor('dashboard/parameter', 'parameter.', 'class="alert-link"'));
            redirect('dashboard/parameter/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'Data gagal dihapus. Kembali ke halaman '. anchor('dashboard/parameter', 'parameter.', 'class="alert-link"'));
            redirect('dashboard/parameter/error');
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

    // Kolom "password" harus diisi hanya untuk proses tambah.
    // Jika "id" ada di URL (edit), maka password tidak "required"
}