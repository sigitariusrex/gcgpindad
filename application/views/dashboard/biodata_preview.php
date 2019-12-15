<div class="container">
<div class="jumbotron bio-preview">
    <h2>DATA DIVISI</h2>
    <hr>

    <h3 class="bg-success">A. DATA DIVISI</h3>
    <dl class="dl-horizontal">
        <dt>Nomor Divisi</dt>
        <dd>: <?php echo format_no_divisi($divisi->id) ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Kode Divisi</dt>
        <dd>: <?php echo $divisi->kode_divisi ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Nama Divisi</dt>
        <dd>: <?php echo $divisi->nama_divisi ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Telepon</dt>
        <dd>: <?php echo $divisi->tmp_telepon ?></dd>
    </dl>
    
</div> <!-- jumbotron end -->

<div class="text-center">
    <?php echo anchor('dashboard/biodata-cetak', '&nbsp; &nbsp; Cetak &nbsp; &nbsp;', array('class' => 'btn btn-primary btn-lg', 'role' => 'button')); ?>
</div>
</div>