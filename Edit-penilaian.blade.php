@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Tambah Penilaian</h5>
            <div class="card-body">
                <form action="{{ url('update-penilaian',$fas->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Hotel</label>
                        <input type="text" name="id_hotel" class="form-control" placeholder="Nama Hotel"value="{{ $fas->id_hotel}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Tempat Wisata</label>
                        <input type="text" name="id_tempatwisata" class="form-control" placeholder="Nama Tempat Wisata"value="{{ $fas->id_tempatwisata}}">
                    </div>
                <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Komentar</label>
                        <input type="text" name="komentar" class="form-control" placeholder="Komentar"value="{{ $fas->komentar}}">
                    </div>
                        <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Tgl Penilaian</label>
                        <input type="date" name="tgl_penilaian" class="form-control" placeholder="Tgl Penilaian"value="{{ $fas->tgl_penilaian}}">
                        </div>
                        <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>      
            </div>
@endsection