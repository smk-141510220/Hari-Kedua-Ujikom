@extends('layouts/app')
@section('content')
<div class="col-md-9 ">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Jabatan</center></div>
                 <div class="panel-body">
                <div class="form-group"><center>
                <form action="{{url('jabatan')}}/?nama_jabatan=nama_jabatan">
                <input type="text" name="nama_jabatan" placeholder="search">
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
			<a href="{{url('jabatan/create')}}" class="btn btn-success">Tambah Data</a> 
				
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
		@php
		$no=1;
		@endphp
		@foreach($jabatan as $jabatans)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$jabatans->kode_jabatan}}</td>
			<td>{{$jabatans->nama_jabatan}}</td>
			<?php $jabatans->besaran_uang=number_format($jabatans->besaran_uang,2,',','.') ?>
			<td>{{$jabatans->besaran_uang}}</td>
			
		<td><a href="{{route('jabatan.edit',$jabatans->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>

		{!!Form::open(['method'=>'DELETE','route'=>['jabatan.destroy',$jabatans->id]])!!}
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		{{$jabatan->links()}}

		@endforeach

	</tbody>
</table>




@endsection