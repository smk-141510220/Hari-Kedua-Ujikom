<?php $__env->startSection('content'); ?>
<div class="col-md-3 ">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center>
                <h3>MY APPLICATION</h3>
                <h5>HALAMAN WEB</h5>
                <div class="collapse navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-center">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a class="" href="<?php echo e(url('/login')); ?>">Login</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>


                <div class="panel-body" align="center">
                    
                    <a class="btn btn-primary form-control" href="<?php echo e(url('jabatan')); ?>">Jabatan</a><hr>
                    <a class="btn btn-primary form-control" href="<?php echo e(url('golongan')); ?>">Golongan</a><hr>
                    <a class="btn btn-primary form-control" href="<?php echo e(url('pegawai')); ?>">Pegawai</a><hr>
                    <a class="btn btn-primary form-control" href="<?php echo e(url('kategori_lembur')); ?>">Kategori Lembur</a><hr>  
                      <a class="btn btn-primary form-control" href="<?php echo e(url('lemburpegawai')); ?>">Lembur Pegawai</a><hr>
                    <a class="btn btn-primary form-control" href="<?php echo e(url('tunjanganpegawai')); ?>">Tunjangan </a><hr>
                    <a class="btn btn-primary form-control" href="<?php echo e(url('penggajian')); ?>">Penggajian Karyawan</a><hr>  

                </div>
            </center>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Tambah Golongan</h1> </div>
                <div class="panel-body">

                     <?php echo Form::open(['url' => 'golongan']); ?>

                    <div class="col-md-6">
                        <?php echo Form::label('kode golongan', 'kode golongan'); ?>

                        <?php echo Form::text('kode_golongan',null,['class'=>'form-control']); ?>


                        <?php if($errors->has('kode_golongan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('kode_golongan')); ?></strong>
                                    </span>
                                <?php endif; ?>

                    </div>
                    <div class="col-md-6">
                        <?php echo Form::label('Nama golongan', 'Nama golongan'); ?>

                        <?php echo Form::text('nama_golongan',null,['class'=>'form-control']); ?>

                        <?php if($errors->has('nama_golongan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nama_golongan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                    </div>
                    <div class="col-md-12">
                        <?php echo Form::label('besaran uang', 'besaran uang'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control']); ?>

                        <?php if($errors->has('besaran_uang')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('besaran_uang')); ?></strong>
                                    </span>
                                <?php endif; ?>
                    </div>
                    <div class="col-md-12">
                        <?php echo Form::submit('SAVE', ['class' => 'btn btn-primary form-control']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>