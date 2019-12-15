<?php
class Divisi extends Operator_Controller
{
    public $data = array(
        'halaman' => 'divisi',
        'main_view' => 'admin/divisi_list',
        'title' => 'Data Divisi',
    );

    public function index($offset = 0)
    {
        $divisi = $this->divisi->get_all_paged($offset);
        if ($divisi) {
            $this->data['divisi'] = $divisi;
            $this->data['paging'] = $this->divisi->paging('biasa', site_url('admin/divisi/halaman/'), 4);
        } else {
            $this->data['divisi'] = 'Tidak ada data divisi.';
        }
        $this->load->view($this->layout, $this->data);
    }

    public function cari($offset = 0)
    {
        $divisi = $this->divisi->cari($offset);
        if ($divisi) {
            $this->data['divisi'] = $divisi;
            $this->data['paging'] = $this->divisi->paging('pencarian', site_url('admin/divisi/cari/'), 4);
        } else {
            $this->data['divisi'] = 'Data tidak ditemukan.'. anchor('admin/divisi', ' Tampilkan semua divisi.', 'class="alert-link"');
        }
        $this->load->view($this->layout, $this->data);
    }

    public function cetak($id)
    {
        // Pastikan data divisi ada.
        $divisi = $this->divisi->get($id);
        if (! $divisi) {
            $this->session->set_flashdata('pesan_error', 'Data divisi tidak ada. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/error');
        }
        $data['divisi'] = $divisi;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/biodata_pdf', $data, true);
        // Nomor perserta (untuk nama file)
        $no_divisi = format_no_divisi($id);

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('biodata_'.$no_divisi.'.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/error');
        }
    }

    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'Data Divisi';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'Data Divisi';
        $this->load->view($this->layout, $this->data);
    }

    public function hapus($id)
    {
        // Pastikan hanya admin yang bisa menghapus data kontak.
        if ($this->session->userdata('user_level') != 'administrator') {
            $this->session->set_flashdata('pesan_error', 'Anda tidak berhak menghapus data divisi. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/error');
        }

        // Pastikan data divisi ada.
        if (! $this->divisi->get($id)) {
            $this->session->set_flashdata('pesan_error', 'Data divisi tidak ada. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/error');
        }

        // Hapus
        if ($this->divisi->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus. Kembali ke halaman '. anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'Data gagal dihapus. Kembali ke halaman '. anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/error');
        }
    }

    // Ubah status verifikasi
    public function ubah_status_verifikasi($id)
    {
        // Pastikan data divisi ada.
        $divisi = $this->divisi->get($id);
        if (! $divisi) {
            $this->session->set_flashdata('pesan_error', 'Data divisi tidak ada. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/error');
        }

        // Ubah status verifikasi
        if ($this->divisi->ubah_status_verifikasi($id, $divisi->status_verifikasi)) {
            $this->session->set_flashdata('pesan', 'Status verifikasi berhasil diubah. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/sukses');
        } else {
            $this->session->set_flashdata('pesan', 'Status verifikasi gagal diubah. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/error');
        }
    }

    // Ubah status verifikasi
    public function ubah_status_seleksi($id)
    {
        // Pastikan data divisi ada.
        $divisi = $this->divisi->get($id);
        if (! $divisi) {
            $this->session->set_flashdata('pesan_error', 'Data divisi tidak ada. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/error');
        }

        // Pastikan data sudah diverifikasi.
        if (! $divisi->status_verifikasi) {
            $this->session->set_flashdata('pesan_error', 'Data siswa <strong>belum diverifikasi</strong>. Untuk menentukan hasil-seleksi, data siswa harus diverifikasi dahulu. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/error');
        }

        // Ubah status seleksi
        if ($this->divisi->ubah_status_seleksi($id, $divisi->status_seleksi)) {
            $this->session->set_flashdata('pesan', 'Status seleksi berhasil diubah. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/sukses');
        } else {
            $this->session->set_flashdata('pesan', 'Status seleksi gagal diubah. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi');
        }
    }

    // Ubah status verifikasi
    public function ubah_status_pendaftaran($id)
    {
        // Pastikan data divisi ada.
        $divisi = $this->divisi->get($id);
        if (! $divisi) {
            $this->session->set_flashdata('pesan_error', 'Data divisi tidak ada. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/error');
        }

        // Ubah status verifikasi
        if ($this->divisi->ubah_status_pendaftaran($id, $divisi->status_pendaftaran)) {
            $this->session->set_flashdata('pesan', 'Status pendaftaran berhasil diubah. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/sukses');
        } else {
            $this->session->set_flashdata('pesan', 'Status pendaftaran gagal diubah. Kembali ke halaman ' . anchor('admin/divisi', 'divisi.', 'class="alert-link"'));
            redirect('admin/divisi/error');
        }
    }
}