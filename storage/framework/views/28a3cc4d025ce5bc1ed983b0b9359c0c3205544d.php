<?php $__env->startSection('content'); ?>
<center><h1>Pegawai</h1></center>
<hr>
<div class="col-md-9 ">
<table class="table table-striped table bordered table-hover">
<!-- <table class="table table-default"> -->
<tr class="danger">
<a href="<?php echo e(url('/pegawai/create')); ?>"class="btn btn-primary form-control">Tambah Data</a>
<br><br>
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Nip</center></th>
		<th><center>Nama</center></th>
		<th><center>Email</center></th>
		<th><center>permision</center></th>
		<th colspan="2">Jabatan dan golongan</th>
		<th>Foto</th>
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		<?php 
		$no=1;
		 ?>
		<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawais): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><?php echo e($no++); ?></td>
			<td><?php echo e($pegawais->nip); ?></td>
			<td><?php echo e($pegawais->User->name); ?></td>
			<td><?php echo e($pegawais->User->email); ?></td>
			<td><?php echo e($pegawais->User->permision); ?></td>
			<td><?php echo e($pegawais->jabatanModel->nama_jabatan); ?></td>
			<td><?php echo e($pegawais->golonganModel->nama_golongan); ?></td>
			
	<td><img src="assets/image/<?php echo e($pegawais->foto); ?>" height="80" width="80"></td>

		<td><a href="<?php echo e(route('pegawai.edit',$pegawais->id)); ?>"class="btn btn-warning">edit</a></td>	
		</td>

		<td>
		<?php echo Form::open(['method'=>'DELETE','route'=>['pegawai.destroy',$pegawais->id]]); ?>

		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		<?php echo Form::close(); ?>

		</td>
		</tr>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

	</tbody>
</table>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>