<div class="container">
<h2>Parameter</h2>
<hr>

<?php echo form_open($form_action, array('id'=>'myform', 'class'=>'form-horizontal', 'role'=>'form')) ?>

    <h3 class="bg-success">A. Keterangan Parameter</h3>

    <!-- kode_divisi -->
    <div class="form-group form-group-sm">        
        <?php echo form_label('Kode Divisi', 'kode_divisi_fk', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-9">
            <p class="form-control-static"><?php echo $values->kode_divisi_fk;?></p>
        </div>
    </div>

    
    <!-- kode_scorecard -->
    <div class="form-group form-group-sm">        
        <?php echo form_label('Kode Scorecard', 'kode_scorecard_fk', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-9">
            <p class="form-control-static"><?php echo $values->kode_scorecard_fk;?></p>
        </div>
    </div>

    <!-- bobot -->
    <div class="form-group form-group-sm">        
        <?php echo form_label('Bobot', 'bobot', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-9">
            <p class="form-control-static"><?php echo $values->bobot;?></p>
        </div>
    </div>
    
     <h3 class="bg-success">B. Keterangan Faktor Uji Dan Unsur Pemenuhan</h3>

     <!-- faktor_uji1 -->
    <div class="form-group form-group-sm">        
        <?php echo form_label('Faktor Uji 1', 'faktor_uji1', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-4">
            <p class="form-control-static"><?php echo $values->faktor_uji1;?></p>
        </div>
        <?php echo form_label('Unsur Pemenuhan 1', 'unsur_pemenuhan1', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-4">
            <p class="form-control-static"><?php echo $values->unsur_pemenuhan1;?></p>
        </div>
    </div>

    <!-- jawaban1 -->
    <div class="form-group has-feedback <?php set_validation_style('jawaban1')?>">
            <?php echo form_label('Jawaban 1', 'jawaban1', array('class' => 'control-label col-sm-2')) ?>
            <?php echo form_textarea('jawaban1', $values->jawaban1, 'id="jawaban1" class="form-control mytextarea" placeholder="Jawaban 1"') ?>
            <?php set_validation_icon('jawaban1') ?>
            <?php echo form_error('jawaban1', '<span class="help-block">', '</span>');?>
    </div>

     <!-- nilai1 -->
    <div class="form-group form-group-sm">        
        <?php echo form_label('Nilai 1', 'nilai1', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-9">
            <p class="form-control-static"><?php echo $values->nilai1;?></p>
        </div>
    </div><br><br>

     <!-- faktor_uji2 -->
    <div class="form-group form-group-sm">        
        <?php echo form_label('Faktor Uji 2', 'faktor_uji2', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-4">
            <p class="form-control-static"><?php echo $values->faktor_uji2;?></p>
        </div>
        <?php echo form_label('Unsur Pemenuhan 2', 'unsur_pemenuhan2', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-4">
            <p class="form-control-static"><?php echo $values->unsur_pemenuhan2;?></p>
        </div>
    </div>

    <!-- jawaban2 -->
    <div class="form-group has-feedback <?php set_validation_style('jawaban2')?>">
            <?php echo form_label('Jawaban 2', 'jawaban2', array('class' => 'control-label col-sm-2')) ?>
            <?php echo form_textarea('jawaban2', $values->jawaban2, 'id="jawaban2" class="form-control mytextarea" placeholder="Jawaban 2"') ?>
            <?php set_validation_icon('jawaban2') ?>
            <?php echo form_error('jawaban2', '<span class="help-block">', '</span>');?>
    </div>

      <!-- nilai2 -->
    <div class="form-group form-group-sm">        
        <?php echo form_label('Nilai 2', 'nilai2', array('class' => 'control-label col-sm-2')) ?>
        <div class="col-sm-9">
            <p class="form-control-static"><?php echo $values->nilai2;?></p>
        </div>
    </div><br><br>


    <hr>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-2">
            <?php echo form_button(array('content'=>'Simpan', 'type'=>'submit', 'class'=>'btn btn-primary', 'data-confirm'=>'Anda yakin akan menyimpan data ini?')) ?>
        </div>
    </div>

<?php echo form_close() ?>

</div>