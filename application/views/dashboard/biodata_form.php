<div class="container">
<h2>Biodata</h2>
<hr>

<?php echo form_open($form_action, array('id'=>'myform', 'class'=>'form-horizontal', 'role'=>'form')) ?>

    <!-- hidden field -->
    <?php echo form_hidden('id', $values->id);?>
    <?php echo form_hidden('kode_divisi', $values->kode_divisi);?>

    <h3 class="bg-success">A. Data Divisi</h3>

    <!-- no_divisi -->
    <div class="form-group form-group-sm">
        <?php echo form_label('Nomor Divisi', 'no_divisi', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <p class="form-control-static"><?php echo format_no_divisi($values->id);?></p>
        </div>
    </div>

    <!-- kode Divisi -->
    <div class="form-group form-group-sm">        
        <?php echo form_label('Kode Divisi', 'kode_divisi', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <p class="form-control-static"><?php echo $values->kode_divisi;?></p>
        </div>
    </div>

    <!-- nama_divisi -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama_divisi')?>">        
        <?php echo form_label('Nama Divisi', 'nama_divisi', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama_divisi', $values->nama_divisi, 'id="nama_divisi" class="form-control" placeholder="Nama Divisi" maxlength="64"') ?>
            <?php set_validation_icon('nama_divisi') ?>
        </div>
        <?php if (form_error('nama_divisi')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama_divisi', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    

    <!-- tmp_telepon -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tmp_telepon')?>">        
        <?php echo form_label('Telepon', 'tmp_telepon', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('tmp_telepon', $values->tmp_telepon, 'id="tmp_telepon" class="form-control" placeholder="Telepon" maxlength="16"') ?>
            <?php set_validation_icon('tmp_telepon') ?>
        </div>
        <?php if (form_error('tmp_telepon')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tmp_telepon', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <hr>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <?php echo form_button(array('content'=>'Simpan', 'type'=>'submit', 'class'=>'btn btn-primary', 'data-confirm'=>'Anda yakin akan menyimpan data ini?')) ?>
        </div>
    </div>

<?php echo form_close() ?>

</div>