<?php
class Parameter_model extends MY_Model
{
    protected $_per_page = 5;

    public function cari($offset)
    {
        $this->get_real_offset($offset);
        $kata_kunci = $this->input->get('kata_kunci', true);
        $id = $kata_kunci;

        return $this->db->where("(kode_divisi_fk LIKE '%$kata_kunci%')")
                        ->limit($this->_per_page, $this->_offset)
                        ->order_by('id', 'ASC')
                        ->get($this->_tabel)
                        ->result();
    }

    public function cari_num_rows()
    {
        $kata_kunci = $this->input->get('kata_kunci', true);
        $id = $kata_kunci;

        return $this->db->where("(kode_divisi_fk LIKE '%$kata_kunci%')")
                        ->order_by('id', 'ASC')
                        ->get($this->_tabel)
                        ->num_rows();
    }

    protected $_tabel = 'tb_parameter';

    public $form_rules = array(
        array(
            'field' => 'kode_scorecard_fk',
            'label' => 'Kode Scorecard',
            'rules' => 'trim|xss_clean|required||max_length[5]|callback__kode_scorecard_fk'
        ),
        array(
            'field' => 'kode_ket_scorecard_fk',
            'label' => 'Kode Scorecard',
            'rules' => 'trim|xss_clean|required|callback__kode_ket_scorecard_fk'
        ),
        array(
            'field' => 'kode_divisi_fk',
            'label' => 'Kode Divisi',
            'rules' => 'trim|xss_clean|required|callback__kode_divisi_fk'
        ),
        array(
            'field' => 'faktor_uji1|callback__faktor_uji1',
            'label' => 'Faktor Uji',
            'rules' => 'trim|xss_clean|required|max_length[500]'
        ),
        array(
            'field' => 'faktor_uji2|callback__faktor_uji2',
            'label' => 'Faktor Uji',
            'rules' => 'trim|xss_clean|required|max_length[500]'
        ),
        array(
            'field' => 'unsur_pemenuhan1',
            'label' => 'Unsur Pemenuhan',
            'rules' => 'trim|xss_clean|required|max_length[500]'
        ),
        array(
            'field' => 'unsur_pemenuhan2',
            'label' => 'Unsur Pemenuhan',
            'rules' => 'trim|xss_clean|required|max_length[500]'
        ),
        array(
            'field' => 'nilai1',
            'label' => 'Nilai 1',
            'rules' => 'trim|xss_clean|required|max_length[5]'
        ),
        array(
            'field' => 'nilai2',
            'label' => 'Nilai 2',
            'rules' => 'trim|xss_clean|required|max_length[5]'
        ),
        array(
            'field' => 'bobot',
            'label' => 'Bobot',
            'rules' => 'trim|xss_clean|required|max_length[5]'
        ),
    );

    public $default_value = array(
        'kode_scorecard_fk' => '',
        'kode_ket_scorecard_fk' => '',
        'kode_divisi_fk' => '',
        'kode_ket_scorecard_fk' => '',
        'nilai1' => '',
        'nilai2' => '',
        'nilai3' => '',
        'nilai4' => '',
        'nilai5' => '',
        'faktor_uji1' => '',
        'faktor_uji2' => '',
        'faktor_uji3' => '',
        'faktor_uji4' => '',
        'faktor_uji5' => '',
        'unsur_pemenuhan1' => '',
        'unsur_pemenuhan2' => '',
        'unsur_pemenuhan3' => '',
        'unsur_pemenuhan4' => '',
        'unsur_pemenuhan5' => '',
        'bobot' => '',
    );

    public function tambah($parameter)
    {
        $parameter = (object) $parameter;
        return $this->insert($parameter);
    }

    public function edit($id, $parameter)
    {
        $parameter = (object) $parameter;
        return $this->update($id, $parameter);
    }
}