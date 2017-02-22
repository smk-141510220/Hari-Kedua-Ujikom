@extends('layouts/app')
@section('content')

<div class="col-md-9 ">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Golongan</center></div>
                <div class="panel-body">
                <div class="form-group"><center>
                <form action="{{url('golongan')}}/?nama_golongan=nama_golongan">
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
			<a href="{{url('golongan/create')}}" class="btn btn-success">Tambah Data</a> 
			
			
			
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
		@php
		$no=1;
		@endphp
		@foreach($golongan as $golongans)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$golongans->kode_golongan}}</td>
			<td>{{$golongans->nama_golongan}}</td>
			<td>{{$golongans->besaran_uang}}</td>
			
		<td><a href="{{route('golongan.edit',$golongans->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<th>
                                    {!!Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$golongans->id]])!!}
                                    {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                                    {!!Form::close()!!}
                                </th>
		</tr>
		
		@endforeach

	</tbody>
</table>

{{$golongan->links()}}



@endsection