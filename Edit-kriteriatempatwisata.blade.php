@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Tambah Kriteria Tempat Wisata</h5>
            <div class="card-body">
                <form action="{{ url('update-kriteriatempatwisata',$fas->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Tempat Wisata</label>
                        <input type="text" name="id_tempatwisata" class="form-control" placeholder="Nama Tempat Wisata"value="{{ $fas->id_tempatwisata}}">
                    </div>
                    <div class="mb-3">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nilai</label>
                        <input type="text" name="nilai" class="form-control"  placeholder="Nilai"value="{{ $fas->nilai}}">
                    </div>
                <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi"value="{{ $fas->deskripsi}}">
                        </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">ubah data</button>
                    </form>
                  </div>
                </div>      
            </div>
@endsection