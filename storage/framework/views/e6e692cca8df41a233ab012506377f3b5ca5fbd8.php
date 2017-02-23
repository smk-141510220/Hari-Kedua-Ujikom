<?php $__env->startSection('content'); ?>
<div class="col-md-9 ">

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tunjangan </center></div>

	<table class="table table-striped table bordered table-hover">
		<table class="table table-hover table-striped ">
			<tr class="danger">
			  <div class="panel-body">
                    <table class="table" border="1">
                        <thead>
			<a href="<?php echo e(url('tunjangan/create')); ?>" class="btn btn-success">Tambah Data</a> 
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Kode Tunjangan</center></th>
		<th><center>Nip</center></th>
		<th><center>Nama pegawai</center></th>
		<th><center>Jabatan</center></th>
		<th><center>Golongan</center></th>
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
		<?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tunjangans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><?php echo e($no++); ?></td>
			<td><?php echo e($tunjangans->tunjanganModel->kode_tunjangan); ?></td>
			<td><?php echo e($tunjangans->pegawaiModel->nip); ?></td>
			<td><?php echo e($tunjangans->pegawaiModel->User->name); ?></td>
			<td><?php echo e($tunjangans->pegawaiModel->jabatanModel->nama_jabatan); ?></td>
			<td><?php echo e($tunjangans->pegawaiModel->golonganModel->nama_golongan); ?></td>
			<td><?php echo e($tunjangans->tunjanganModel->status); ?></td>
			<td><?php echo e($tunjangans->tunjanganModel->jumlah_anak); ?></td>
			<td><?php echo e($tunjangans->tunjanganModel->besaran_uang); ?></td>
		<td><a href="<?php echo e(route('tunjangan.edit',$tunjangans->id)); ?>" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		<?php echo Form::open(['method'=>'DELETE','route'=>['tunjangan.destroy',$tunjangans->id]]); ?>

		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		<?php echo Form::close(); ?>

		</td>
		</tr>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

	</tbody>
</table>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>