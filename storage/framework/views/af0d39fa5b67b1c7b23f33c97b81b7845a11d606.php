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
                <div class="panel-heading"><h1>Tunjangan Pegawai</h1></div>
                <div class="panel-body"
                <div class="form-group"><center>
                <form action="<?php echo e(url('tunjangan_pegawai')); ?>/?kode_tunjangan_id=kode_tunjangan_id">
                <input type="text" name="kode_tunjangan_id" placeholder="search">
                    <input type="submit" value="search" class="btn btn-primary">
</center>

                </form>
                    
                </div>
                    
                </div>
	<table class="table table-striped table bordered table-hover">
		<table class="table table-hover table-striped ">
			<tr class="danger">
			  <div class="panel-body">
                    <table class="table" border="1">
                        <thead>
			<a href="<?php echo e(url('tunjangan_pegawai/create')); ?>" class="btn btn-success">Tambah Data</a> 
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Kode Tunjangan</center></th>
		<th><center>Nip</center></th>
		<th><center>Nama pegawai</center></th>
		<th>Jabatan</th>
		<th>Golongan</th>
		<th><center>Status</center></th>
		<th><center>Jumlah anak</center></th>
		<th><center>Besaran uang</center></th>
		<th colspan="2">Action</th>
			
		</tr>
	</thead>
	<tbody>
		<?php 
		$no=1;
		 ?>
		<?php $__currentLoopData = $tunjangan_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tunjangan_pegawais): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><?php echo e($no++); ?></td>
			<td><?php echo e($tunjangan_pegawais->tunjanganModel->kode_tunjangan); ?></td>
			<td><?php echo e($tunjangan_pegawais->pegawaiModel->nip); ?></td>
			<td><?php echo e($tunjangan_pegawais->pegawaiModel->User->name); ?></td>
			<td><?php echo e($tunjangan_pegawais->pegawaiModel->jabatanModel->nama_jabatan); ?></td>
			<td><?php echo e($tunjangan_pegawais->pegawaiModel->golonganModel->nama_golongan); ?></td>
			<td><?php echo e($tunjangan_pegawais->tunjanganModel->status); ?></td>
			<td><?php echo e($tunjangan_pegawais->tunjanganModel->jumlah_anak); ?></td>
			<td><?php echo e($tunjangan_pegawais->tunjanganModel->besaran_uang); ?></td>
		<td><a href="<?php echo e(route('tunjangan_pegawai.edit',$tunjangan_pegawais->id)); ?>" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		<?php echo Form::open(['method'=>'DELETE','route'=>['tunjangan_pegawai.destroy',$tunjangan_pegawais->id]]); ?>

		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		<?php echo Form::close(); ?>

		</td>
		</tr>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

	</tbody>
</table>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>