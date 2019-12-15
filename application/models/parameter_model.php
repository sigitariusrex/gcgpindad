<?php
class Parameter_model extends MY_Model
{
    protected $_per_page = 5;

    public function cari($offset)
    {
        $this->get_real_offset($offset);
        $kata_kunci = $this->input->get('kata_kunci', true);
        $id = $kata_kunci;

        return $this->db->where("(kode_scorecard_fk LIKE '%$kata_kunci%' OR kode_divisi_fk LIKE '%$kata_kunci%')")
                        ->limit($this->_per_page, $this->_offset)
                        ->order_by('id', 'ASC')
                        ->get($this->_tabel)
                        ->result();
    }

    public function cari_num_rows()
    {
        $kata_kunci = $this->input->get('kata_kunci', true);
        $id = $kata_kunci;

        return $this->db->where("(kode_scorecard_fk LIKE '%$kata_kunci%' OR kode_divisi_fk LIKE '%$kata_kunci%')")
                        ->order_by('id', 'ASC')
                        ->get($this->_tabel)
                        ->num_rows();
    }

    public $form_rules = array(
        
        array(
            'field' => 'jawaban1',
            'label' => 'Jawaban 1',
            'rules' => 'trim|xss_clean|max_length[500]'
        ),
        array(
            'field' => 'jawaban2',
            'label' => 'Jawaban 2',
            'rules' => 'trim|xss_clean|max_length[500]'
        ),
        array(
            'field' => 'jawaban3',
            'label' => 'Jawaban 3',
            'rules' => 'trim|xss_clean|max_length[500]'
        ),
         array(
            'field' => 'jawaban4',
            'label' => 'Jawaban 4',
            'rules' => 'trim|xss_clean|max_length[500]'
        ),
          array(
            'field' => 'jawaban5',
            'label' => 'Jawaban 5',
            'rules' => 'trim|xss_clean|max_length[500]'
        ),
    );

    public $default_value = array(
        'jawaban1' => '',
        'jawaban2' => '',
        'jawaban3' => '',
        'jawaban4' => '',
        'jawaban5' => '',
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