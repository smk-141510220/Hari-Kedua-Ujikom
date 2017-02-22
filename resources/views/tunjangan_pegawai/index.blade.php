@extends('layouts/app')
@section('content')
<div class="col-md-9 ">

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tunjangan Pegawai</center></div>

	<table class="table table-striped table bordered table-hover">
		<table class="table table-hover table-striped ">
			<tr class="danger">
			  <div class="panel-body">
                    <table class="table" border="1">
                        <thead>
			<a href="{{url('tunjangan_pegawai/create')}}" class="btn btn-success">Tambah Data</a> 
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
		@php
		$no=1;
		@endphp
		@foreach($tunjangan_pegawai as $tunjangan_pegawais)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$tunjangan_pegawais->tunjanganModel->kode_tunjangan}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->nip}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->User->name}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->jabatanModel->nama_jabatan}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->golonganModel->nama_golongan}}</td>
			<td>{{$tunjangan_pegawais->tunjanganModel->status}}</td>
			<td>{{$tunjangan_pegawais->tunjanganModel->jumlah_anak}}</td>
			<td>{{$tunjangan_pegawais->tunjanganModel->besaran_uang}}</td>
		<td><a href="{{route('tunjangan_pegawai.edit',$tunjangan_pegawais->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['tunjangan_pegawai.destroy',$tunjangan_pegawais->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>




@endsection