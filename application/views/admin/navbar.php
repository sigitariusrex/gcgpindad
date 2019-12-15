<?php $user_level = $this->session->userdata('user_level')?>

<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <!-- Link -->
        <ul class="nav navbar-nav navbar-left">
            <?php echo (isset($halaman) && $halaman == 'home') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin', '<span class="glyphicon glyphicon-home"></span> Home');?></li>

            <?php if ($user_level == 'administrator') : ?>
                <?php echo (isset($halaman) && $halaman == 'user') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin/user', '<span class="glyphicon glyphicon-user"></span> User');?></li>
            <?php endif ?>
            <!-- Dropdown Informasi -->
            <?php echo (isset($halaman) && preg_match('#(score|parameter)#', $halaman)) ? '<li class="active">' : '<li>'; ?>
            <?php echo anchor('#', '<span class="glyphicon glyphicon-pencil"></span> Jobdesk<span class="caret"></span>', 'class="dropdown-toggle" data-toggle="dropdown"');?>
            <ul class="dropdown-menu" role="menu">
                
                    <?php echo (isset($halaman) && $halaman == 'score') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin/score', '<span class="glyphicon glyphicon-file"></span> Scorecard');?></li>
                    <?php echo (isset($halaman) && $halaman == 'parameter') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin/parameter', '<span class="glyphicon glyphicon-file"></span> Parameter');?></li>
                
            </ul>
            </li>
            <?php echo (isset($halaman) && $halaman == 'divisi') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin/divisi', '<span class="glyphicon glyphicon-list-alt"></span> Divisi');?></li>
            <?php if ($user_level == 'administrator') : ?>
                <?php echo (isset($halaman) && $halaman == 'pengumuman') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin/pengumuman', '<span class="glyphicon glyphicon-bullhorn"></span> Pengumuman'); ?></li>
            <?php endif ?>
            <?php echo (isset($halaman) && $halaman == 'kontak') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin/kontak', '<span class="glyphicon glyphicon-envelope"></span> Kontak'); ?></li>
            <?php echo (isset($halaman) && $halaman == 'myadmin') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin/myadmin', '<span class="glyphicon glyphicon-cog"></span> Pengaturan'); ?></li>

        </ul>
        <!-- end Link -->


        <!-- Informasi login -->
        <p class="navbar-text navbar-right">
            Login sebagai,
            <strong>
                <?php echo anchor('admin/logout',
                    '<span class="glyphicon glyphicon-user"></span> ' . $this->session->userdata('nama'),
                    array('class' => 'navbar-link', 'data-confirm' => 'Anda yakin akan logout?')); ?>
            </strong>
        </p>
        <!-- end Informasi login -->

    </div> <!-- container -->
</nav>