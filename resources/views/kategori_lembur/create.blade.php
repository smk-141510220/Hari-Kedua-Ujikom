
@extends('layouts.app')
@section('content')

<div class="col-md-9 ">
<center><h1>Kategori Lembur</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Jabatan</center></div>

    <table class="table table-striped table bordered table-hover">
        <table class="table table-hover table-striped ">
            <tr class="danger">
              <div class="panel-body">
                    <table class="table" border="1">
                        <thead>
            <a href="{{url('jabatan/create')}}" class="btn btn-success">Tambah Data</a> 
                {{$jabatan->links()}}


                     {!! Form::open(['url' => 'kategori_lembur']) !!}
                    <div class="form-group">
                        {!! Form::label('kode lembur', 'kode lembur') !!}
                        {!! Form::text('kode_lembur',null,['class'=>'form-control']) !!}
                          @if ($errors->has('kode_lembur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_lembur') }}</strong>
                                    </span>
                            @endif
                    </div>

                     <div class="col-md-6 col-sm-6 col-xs-12">
                     {!!Form::label('jabatan','jabatan')!!}

                        <select class="form-control" col-md-7 col-sx-12 name="jabatan_id">
                            @foreach ($jabatan as $jabatans)
                            <option value="{{$jabatans->id}}">{{ $jabatans->nama_jabatan}}</option>
                            @endforeach
                        </select>
                    </div>
                    

                      <div class="col-md-6 col-sm-6 col-xs-12">
                      {!!Form::label('golongan','golongan')!!}
                        <select class="form-control" col-md-7 col-sx-12 name="golongan_id">
                            @foreach ($golongan as $jabatans)
                            <option value="{{$jabatans->id}}">{{ $jabatans->nama_golongan}}</option>
                            @endforeach
                        </select>
                    </div>                    
                    <div class="form-group">
                        {!! Form::label('besaran uang', 'besaran uang') !!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control']) !!}
                    </div>
                    @if ($errors->has('besaran_uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('besaran_uang') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group">
                        {!! Form::submit('SAVE', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
