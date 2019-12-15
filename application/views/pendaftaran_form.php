<div class="container">
    <h2>Form Pendaftaran</h2>
    <hr>

    <?php echo form_open('pendaftaran', array('id'=>'myform', 'class'=>'myform', 'role'=>'form', 'method'=>'post')) ?>

        <div class="form-group has-feedback <?php set_validation_style('username')?>">
            <?php echo form_label('Username', 'username', array('class' => 'control-label')) ?>
            <?php echo form_input('username', $values->username, 'id="username" class="form-control" placeholder="Username" maxlength="10"') ?>
            <?php set_validation_icon('username') ?>
            <?php echo form_error('username', '<span class="help-block">', '</span>');?>
        </div>

         <div class="form-group has-feedback <?php set_validation_style('username')?>">
            <?php echo form_label('Password', 'password', array('class' => 'control-label')) ?>
            <?php echo form_password('password', $values->password, 'id="password" class="form-control" placeholder="Password" maxlength="10"') ?>
            <?php set_validation_icon('password') ?>
            <?php echo form_error('password', '<span class="help-block">', '</span>');?>
        </div>

        <div class="form-group has-feedback <?php set_validation_style('email')?>">
            <?php echo form_label('Email', 'email', array('class' => 'control-label')) ?>
            <?php echo form_input('email', $values->email, 'id="email" class="form-control" placeholder="Email" maxlength="30"') ?>
            <?php set_validation_icon('email') ?>
            <?php echo form_error('email', '<span class="help-block">', '</span>');?>
        </div>

        <div class="form-group has-feedback <?php set_validation_style('nama_divisi')?>">            
            <?php echo form_label('Nama Divisi', 'nama_divisi', array('class' => 'control-label')) ?>
            <?php echo form_input('nama_divisi', $values->nama_divisi, 'id="nama_divisi" class="form-control" placeholder="Nama Divisi" maxlength="100"') ?>            
            <?php set_validation_icon('nama_divisi') ?>
            <?php echo form_error('nama_divisi', '<span class="help-block">', '</span>');?>
        </div>

        <p><?php echo $captcha; ?></p>
        <div class="form-group has-feedback <?php set_validation_style('captcha')?>">            
            <?php echo form_label('Captcha', 'captcha', array('class' => 'control-label')) ?>
            <?php echo form_input('captcha', $values->captcha, 'id="captcha" class="form-control" placeholder="Masukkan 4 huruf / angka pada gambar di atas" maxlength="4"') ?>
            <?php set_validation_icon('captcha') ?>
            <?php echo form_error('captcha', '<span class="help-block">', '</span>');?>
        </div>

        <?php echo form_button(array('content'=>'Daftar', 'type'=>'submit', 'class'=>'btn btn-primary', 'data-confirm'=>'Anda yakin akan menyimpan data ini?')) ?>

    <?php echo form_close() ?>

    <br>
    <p class="text-danger"><strong>Catatan:</strong></p>
    <p class="text-danger">Email harus diisi alamat email yang valid dan aktif, karena akan digunakan untuk mengirim informasi.</p>

</div>