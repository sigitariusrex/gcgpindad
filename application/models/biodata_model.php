<?php
class Biodata_model extends MY_Model
{
    protected $_tabel = 'tb_divisi';

    public $form_rules = array(
        // Data Pribadi ----------------------------------------------------
        array(
            'field' => 'nama_divisi',
            'label' => 'Nama Divisi',
            'rules' => 'trim|xss_clean|required|max_length[64]'
        ),
        
        // Tempat tinggal -------------------------------------------------------
        
        array(
            'field' => 'tmp_telepon',
            'label' => 'Telepon',
            'rules' => 'trim|xss_clean|required|max_length[16]'
        ),
        
    );

    public function simpan($divisi)
    {
        $divisi = (object)$divisi;

        // Set status biodata.
        $divisi->status_biodata = '1';

        // Format huruf depan kapital sebelum disimpan
        $divisi->nama_divisi = format_title_case($divisi->nama_divisi);
        
        return $this->update($divisi->id, $divisi);
    }
}