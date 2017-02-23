<?php $__env->startSection('content'); ?>
<div class="col-md-2 ">
   
        <div class="panel-heading">
           
              
                <div class="panel-body" align="center">
                    
                    <a class="btn btn-primary form-control" href="<?php echo e(url('jabatan')); ?>">Jabatan</a><hr>
                    <a class="btn btn-primary form-control" href="<?php echo e(url('golongan')); ?>">Golongan</a><hr>
                    <a class="btn btn-primary form-control" href="<?php echo e(url('pegawai')); ?>">Pegawai</a><hr>
                    <a class="btn btn-primary form-control" href="<?php echo e(url('kategori_lembur')); ?>">Kategori Lembur</a><hr>  
                      <a class="btn btn-primary form-control" href="<?php echo e(url('lemburpegawai')); ?>">Lembur Pegawai</a><hr>
                    <a class="btn btn-primary form-control" href="<?php echo e(url('tunjanganpegawai')); ?>">Tunjangan </a><hr>
                    <a class="btn btn-primary form-control" href="<?php echo e(url('penggajian')); ?>">Penggajian</a><hr>  

                </div>
          
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel panel-primary">
                <div class="panel-heading"><h1>Jabatan</h1></div>
                <div class="panel-body"
                <div class="form-group"><center>
                <form action="<?php echo e(url('jabatan')); ?>/?nama_jabatan=nama_jabatan">
                <input type="text" name="nama_jabatan" placeholder="search ">
                	<input type="submit" value="search" class="btn btn-primary">
</center>

                </form>
                	
                </div>
                	
                </div>

	<table class="table table-striped table bordered table-hover">
		
			  <div class="panel-body">
                    <table class="table" border="1">
                        <thead>
			<a href="<?php echo e(url('jabatan/create')); ?>" class="btn btn-success">Tambah Data</a> 
				
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>kode jabatan</center></th>
		<th><center>nama jabatan</center></th>
		<th><center>besaran uang</center></th>
		
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		<?php 
		$no=1;
		 ?>
		<?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><?php echo e($no++); ?></td>
			<td><?php echo e($jabatans->kode_jabatan); ?></td>
			<td><?php echo e($jabatans->nama_jabatan); ?></td>
			<?php $jabatans->besaran_uang=number_format($jabatans->besaran_uang,2,',','.') ?>
			<td><?php echo e($jabatans->besaran_uang); ?></td>
			
		<td><a href="<?php echo e(route('jabatan.edit',$jabatans->id)); ?>" class="btn btn-warning">Update</a></td>	
		</td>
		<td>

		<?php echo Form::open(['method'=>'DELETE','route'=>['jabatan.destroy',$jabatans->id]]); ?>

		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		<?php echo Form::close(); ?>

		</td>
		</tr>
		<?php echo e($jabatan->links()); ?>


		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

	</tbody>
</table>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>