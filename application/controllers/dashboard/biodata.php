<?php
class Biodata extends Dashboard_Controller
{
    public $data = array(
        'halaman' => 'biodata',
        'main_view' => 'dashboard/biodata_form'
    );

    public function index()
    {
        // Input dari user.
        $biodata = $this->input->post(null, true);

        // Validasi.
        if ($this->biodata->validate('form_rules')) {
            if ($this->biodata->simpan($biodata)) {
                $this->session->set_flashdata('pesan', 'Biodata berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/home', 'home.', 'class="alert-link"'));
                redirect('dashboard/biodata-sukses');
            } else {
                $this->session->set_flashdata('pesan_error', 'Maaf, penyimpanan biodata gagal. Coba ' . anchor('dashboard/biodata', 'ulangi', 'class="alert-link"') .' beberapa saat lagi.');
                redirect('dashboard/biodata-error');
            }
        }

        // Data untuk form.
        if (!$_POST) {
            $id = intval($this->session->userdata('no_divisi'));
            $this->data['values'] = (object) $this->biodata->get($id);
        } else {
            $this->data['values'] = (object) $biodata;
        }
        $this->data['form_action'] = site_url('dashboard/biodata');
        $this->load->view($this->layout, $this->data);
    }

    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'Biodata Sukses';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'Biodata Error';
        $this->load->view($this->layout, $this->data);
    }

    public function preview()
    {
        $this->data['main_view'] = 'dashboard/biodata_preview';
        $this->data['halaman'] = 'cetak-biodata';

        // Cek status biodata untuk no_divisi yang ada sedang login ini (session)
        $id = $this->session->userdata('no_divisi');
        $divisi = $this->biodata->get(array('id' => $id, 'status_biodata' => '1'));

        if ($divisi) {
            $this->data['divisi'] = $divisi;
            $this->load->view($this->layout, $this->data);
        } else {
            $this->session->set_flashdata('pesan_error', 'Anda belum melengkapi biodata. Silakan melengkapi ' . anchor('dashboard/biodata', 'biodata.', 'class="alert-link"') . ' dahulu!');
            redirect('dashboard/biodata-preview-error');
        }
    }

    public function cetak()
    {
        // Cek status biodata untuk no_divisi yang ada sedang login ini (session)
        $id = $this->session->userdata('no_divisi');
        $divisi = $this->biodata->get(array('id' => $id, 'status_biodata' => '1'));
        if (! $divisi) {
            $this->session->set_flashdata('pesan_error', 'Anda belum melengkapi biodata. Silakan melengkapi ' . anchor('dashboard/biodata', 'biodata.', 'class="alert-link"') . ' dahulu!');
            redirect('dashboard/biodata-cetak-error');
        }
        $data['divisi'] = $divisi;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/biodata_pdf', $data, true);
        // Nomor perserta (untuk nama file)
        $no_divisi = format_no_divisi($divisi->id);

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('biodata_'.$no_divisi.'.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Coba ' . anchor('dashboard/biodata-preview', 'ulangi ', 'class="alert-link"') . ' beberapa saat lagi!');
            redirect('dashboard/biodata-cetak-error');
        }
    }

    // -------------------------------------------------------------------------
    // Fungsi Callback
    // -------------------------------------------------------------------------

    // Cek format tanggal ( dd-mm-yyy )
    public function _format_tanggal($str)
    {
        if (!preg_match('/(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-([0-9]{4})/', $str)) {
            $this->form_validation->set_message('_format_tanggal', 'Format tanggal tidak valid. (dd-mm-yyyy)');
            return false;
        } else {
            return true;
        }
    }
}