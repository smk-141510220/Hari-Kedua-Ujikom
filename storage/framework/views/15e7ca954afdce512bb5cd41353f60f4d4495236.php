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

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel panel-primary">
                <div class="panel-heading"><h1>Golongan</h1></div>
                <div class="panel-body"
                <div class="form-group"><center>
                <form action="<?php echo e(url('golongan')); ?>/?nama_golongan=nama_golongan">
                <input type="text" name="nama_golongan" placeholder="search">
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
			<a href="<?php echo e(url('golongan/create')); ?>" class="btn btn-success">Tambah Data</a> 
			
			
			
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>kode golongan</center></th>
		<th><center>nama golongan</center></th>
		<th><center>besaran uang</center></th>
		
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		<?php 
		$no=1;
		 ?>
		<?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><?php echo e($no++); ?></td>
			<td><?php echo e($golongans->kode_golongan); ?></td>
			<td><?php echo e($golongans->nama_golongan); ?></td>
			<td><?php echo e($golongans->besaran_uang); ?></td>
			
		<td><a href="<?php echo e(route('golongan.edit',$golongans->id)); ?>" class="btn btn-warning">Update</a></td>	
		</td>
		<th>
                                    <?php echo Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$golongans->id]]); ?>

                                    <?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>

                                    <?php echo Form::close(); ?>

                                </th>
		</tr>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

	</tbody>
</table>

<?php echo e($golongan->links()); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>