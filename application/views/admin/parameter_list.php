<?php
// Nomor urut data di tabel.
$per_page = 5;

// Posisi nomor halaman (untuk paging) jika user login / tidak.
$login_status = $this->session->userdata('login_status');
$user_level = $this->session->userdata('user_level');
$page = $this->uri->segment(4);

// Nomor urut data di tabel.
// Ini karena library pagination menggunakan option 'use_page_numbers' => true.
if (empty($page)) {
    $offset = 0;
} else {
    $offset = ($page * $per_page - $per_page);
}
?>

<div class="container">
    <h2>Data Parameter</h2>
    <hr>
    <!-- Paging dan form pencarian -->
    <div class="row navigasi_cari">
        <!-- Paging -->
        <div class="col-xs-12 col-md-6">
            <?php echo (!empty($paging)) ? $paging : ''?>
        </div>
        <!-- /Paging -->

        <!-- Form Pencarian -->
        <div class="col-xs-12 col-md-4 pull-right">
            <form method="get" action="<?php echo site_url('admin/parameter/cari');?>" role="form" class="form-horizontal">
                <div class="input-group">
                    <input type="text" name="kata_kunci" class="form-control" placeholder="Masukkan kode parameter atau kode divisi" id="kata_kunci" value="<?php echo $this->input->get('kata_kunci')?>">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /Form Pencarian -->
    </div>
    <!-- /Paging dan form pencarian -->

    <?php if (!empty($parameter) && is_array($parameter)): ?>
    <div class="row">
        <div class="col-md-12">

            <table class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Scorecard</th>
                    <th>Divisi</th>
                    <th>Bobot</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($parameter as $row): ?>
                    <?php
                  
                    $kode_scorecard_fk = $this->db->get_where('tb_scorecard', array('kode_scorecard' => $row->kode_scorecard_fk))->row();
                    $kode_divisi_fk = $this->db->get_where('tb_divisi', array('kode_divisi' => $row->kode_divisi_fk))->row();
                    // Link edit, hapus, cetak
                    $link_edit = anchor('admin/parameter/edit/'.$row->id, '<span class="glyphicon glyphicon-edit"></span>', array('title' => 'Edit'));
                    $link_hapus = anchor('admin/parameter/hapus/'.$row->id,'<span class="glyphicon glyphicon-trash"></span>', array('title' => 'Hapus', 'data-confirm' => 'Anda yakin akan menghapus data ini?'));
                    ?>
                    <tr>
                        <td><?php echo ++$offset ?></td>
                        <td><?php echo $kode_scorecard_fk->ket_scorecard ?></td>
                        <td><?php echo $kode_divisi_fk->nama_divisi ?></td>
                        <td><?php echo $row->bobot ?></td>
                        <td><?php echo $link_edit.'&nbsp;&nbsp;&nbsp;&nbsp;'.$link_hapus.'&nbsp;&nbsp;&nbsp;&nbsp;' ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
    <?php else: ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <?php echo $parameter ?>
            </div>
        </div>
    </div>
    <?php endif ?>
    <?php
        echo anchor('admin/parameter/tambah', 'Tambah', 'class="btn btn-primary"');
    ?>

</div> <!-- /container -->