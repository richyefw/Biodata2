@extends('students.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('warteg.index') }}"> Back</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('warteg.update',$warteg->id) }}" method="POST" enctype="multipart/form-data"> 
    @csrf

    @method('PUT')
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Kursi:</strong>
                <input type="text" name="nis" class="form-control" placeholder="Ketik..." value="{{$warteg->nis}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Makanan:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Ketik..." value="{{$warteg->nama}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nasi:</strong>
                <input type="text" name="rombel" class="form-control" placeholder="Ketik..." value="{{$warteg->rombel}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lauk:</strong>
                <input type="text" name="rayon" class="form-control" placeholder="Ketik..." value="{{$warteg->rayon}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Minuman:</strong>
                <input type="radio" name="ket" value="EsTeh" {{$warteg->ket == 'EsTeh'? 'checked' : ''}}> EsTeh
                <input type="radio" name="ket" value="Kopi Kapal Api" {{$warteg->ket == 'Kopi Kapal Api'? 'checked' : ''}}> Kopi Kapal Api
                <input type="radio" name="ket" value="Es Jus" {{$warteg->ket == 'Es Jus'? 'checked' : ''}}> Es Jus
                <input type="radio" name="ket" value="Air biasa" {{$warteg->ket == 'Airbiasa'? 'checked' : ''}}> AirBiasa
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection