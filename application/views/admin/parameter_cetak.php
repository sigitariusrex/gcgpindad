<div class="container">
<div class="jumbotron bio-preview">
    <h2>DATA SCORECARD</h2>
    <hr>

    <h3 class="bg-success">A. DATA SCORECARD</h3>
    <dl class="dl-horizontal">
        <dt>Kode Scorecard</dt>
        <dd>: <?php echo $parameter->id) ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Kode Parameter</dt>
        <dd>: <?php echo $parameter->kode_scorecard_fk ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Kode Divisi</dt>
        <dd>: <?php echo $parameter->kode_divisi_fk ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Bobot</dt>
        <dd>: <?php echo $parameter->bobot ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Faktor Uji 1</dt>
        <dd>: <?php echo $parameter->faktor_uji1 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Unsur Pemenuhan 1</dt>
        <dd>: <?php echo $parameter->unsur_pemenuhan1 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Nilai 1</dt>
        <dd>: <?php echo $parameter->nilai1 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Faktor Uji 2</dt>
        <dd>: <?php echo $parameter->faktor_uji2 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Unsur Pemenuhan 2</dt>
        <dd>: <?php echo $parameter->unsur_pemenuhan2 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Nilai 2</dt>
        <dd>: <?php echo $parameter->nilai2 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Faktor Uji 3</dt>
        <dd>: <?php echo $parameter->faktor_uji3 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Unsur Pemenuhan 3</dt>
        <dd>: <?php echo $parameter->unsur_pemenuhan3 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Nilai 3</dt>
        <dd>: <?php echo $parameter->nilai3 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Faktor Uji 4</dt>
        <dd>: <?php echo $parameter->faktor_uji4 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Unsur Pemenuhan 4</dt>
        <dd>: <?php echo $parameter->unsur_pemenuhan4 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Nilai 4</dt>
        <dd>: <?php echo $parameter->nilai4 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Faktor Uji 5</dt>
        <dd>: <?php echo $parameter->faktor_uji5 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Unsur Pemenuhan 5</dt>
        <dd>: <?php echo $parameter->unsur_pemenuhan5 ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Nilai 5</dt>
        <dd>: <?php echo $parameter->nilai5 ?></dd>
    </dl>
    
</div> <!-- jumbotron end -->

<div class="text-center">
    <?php echo anchor('admin/parameter-cetak', '&nbsp; &nbsp; Cetak &nbsp; &nbsp;', array('class' => 'btn btn-primary btn-lg', 'role' => 'button')); ?>
</div>
</div>