@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Tambah Objek Atraksi</h5>
            <div class="card-body">
                <form action="{{ url('update-objekatraksi',$fas->id)}}"method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Tempat Wisata</label>
                        <input type="text" name="id_tempatwisata" class="form-control" placeholder="Nama Tempat Wisata"value="{{ $fas->id_tempatwisata}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Objek</label>
                        <input type="text" name="nama_objek" class="form-control" placeholder="Nama Objek"value="{{ $fas->nama_objek}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Harga Masuk</label>
                        <input type="text" name="harga_masuk" class="form-control" placeholder="Harga Masuk"value="{{ $fas->harga_masuk}}">
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