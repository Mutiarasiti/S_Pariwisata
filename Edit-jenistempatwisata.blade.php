@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Tambah Jenis Tempat Wisata</h5>
            <div class="card-body">
                <form action="{{ url('update-jenistempatwisata',$fas->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Tempat Wisata</label>
                        <input type="text" name="id_kriteriatempatwisata" class="form-control" placeholder="Nama Tempat Wisata"value="{{ $fas->id_kriteriatempatwisata}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" placeholder="lokasi"value="{{ $fas->lokasi}}">
                    </div>
                <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi"value="{{ $fas->deskripsi}}">
                            </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>      
            </div>
@endsection