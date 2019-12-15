<?php
class Score_model extends MY_Model
{
    protected $_per_page = 5;

    public function cari($offset)
    {
        $this->get_real_offset($offset);
        $kata_kunci = $this->input->get('kata_kunci', true);
        $id = $kata_kunci;

        return $this->db->where("(kode_scorecard LIKE '%$kata_kunci%' OR kode_divisi_fk LIKE '%$kata_kunci%')")
                        ->limit($this->_per_page, $this->_offset)
                        ->order_by('id', 'ASC')
                        ->get($this->_tabel)
                        ->result();
    }

    public function cari_num_rows()
    {
        $kata_kunci = $this->input->get('kata_kunci', true);
        $id = $kata_kunci;

        return $this->db->where("(kode_scorecard LIKE '%$kata_kunci%' OR kode_divisi_fk LIKE '%$kata_kunci%')")
                        ->order_by('id', 'ASC')
                        ->get($this->_tabel)
                        ->num_rows();
    }

    protected $_tabel = 'tb_scorecard';

    public $form_rules = array(
        array(
            'field' => 'kode_scorecard',
            'label' => 'Kode Scorecard',
            'rules' => 'trim|xss_clean|required|max_length[5]|callback__kode_scorecard'
        ),
        array(
            'field' => 'kode_divisi_fk',
            'label' => 'Kode Divisi',
            'rules' => 'trim|xss_clean|required|callback__kode_divisi_fk'
        ),
        array(
            'field' => 'kode_ket_divisi_fk',
            'label' => 'Keterangan Kode Divisi',
            'rules' => 'trim|xss_clean|max_length[10]|callback__kode_ket_divisi_fk'
        ),
        array(
            'field' => 'ket_scorecard',
            'label' => 'Keterangan Scorecard',
            'rules' => 'trim|xss_clean|required|max_length[500]'
        ),
    );

    public $default_value = array(
        'kode_scorecard' => '',
        'kode_divisi_fk' => '',
        'kode_ket_divisi_fk' => '',
        'ket_scorecard' => '',
    );

    public function tambah($score)
    {
        $score = (object) $score;
        return $this->insert($score);
    }

    public function edit($id, $score)
    {
        $score = (object) $score;
        return $this->update($id, $score);

         // Jika pekerjaan ibu dipilih, set keterangan pekerjaan ibu dengan null
        if ($score->kode_divisi_fk != '0') {
            $score->kode_ket_divisi_fk = null;
        }
    }
}