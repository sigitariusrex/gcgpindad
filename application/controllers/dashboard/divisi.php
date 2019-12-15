<?php
class Divisi extends Dashboard_Controller
{
    public $data = array(
        'halaman' => 'divisi',
        'main_view' => 'divisi_list',
        'title'  => 'Data Divisi',
    );

    public function index($offset = null)
    {
        $divisi = $this->divisi->get_all_paged($offset);
        if ($divisi) {
            $this->data['divisi'] = $divisi;
            $this->data['paging'] = $this->divisi->paging('biasa', site_url('dashboard/divisi/halaman/'), 4);
        } else {
            $this->data['divisi'] = 'Tidak ada data divisi.';
        }
        $this->data['form_action'] = site_url('dashboard/divisi/cari');
        $this->load->view($this->layout, $this->data);
    }

    public function cari($offset = 0)
    {
        $divisi = $this->divisi->cari($offset);
        if ($divisi) {
            $this->data['divisi'] = $divisi;
            $this->data['paging'] = $this->divisi->paging('pencarian', site_url('dashboard/divisi/cari/'), 4);
        } else {
            $this->data['divisi'] = 'Data tidak ditemukan.'. anchor('dashboard/divisi', ' Tampilkan semua divisi.', 'class="alert-link"');
        }
        $this->data['form_action'] = site_url('dashboard/divisi/cari');
        $this->load->view($this->layout, $this->data);
    }
}