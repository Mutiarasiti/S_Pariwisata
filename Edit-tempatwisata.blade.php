@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Tambah Tempat Wisata</h5>
            <div class="card-body">
                <form action="{{ url('update-tempatwisata',$fas->id)}}"method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Tempat Wisata</label>
                        <input type="text" name="nama_tempatwisata" class="form-control" placeholder="Nama Tempat Wisata"value="{{ $fas->nama_tempatwisata}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat"value="{{ $fas->alamat}}">
                    </div>
                <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Fasilitas</label>
                        <input type="text" name="fasilitas" class="form-control" placeholder="Fasilitas"value="{{ $fas->fasilitas}}">
                        </div>
                        <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>      
            </div>
@endsection