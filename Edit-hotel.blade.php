@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Tambah Data Hotel</h5>
            <div class="card-body">
                <form action="{{ url('update-hotel',$hot->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Hotel</label>
                        <input type="text" name="id_hotel" class="form-control"placeholder="Nama Hotel"value="{{ $hot->id_hotel}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Jeni Hotel</label>
                        <input type="text" name="id_jenishotel" class="form-control" placeholder="Jenis Hotel"value="{{ $hot->id_jenishotel}}">
                <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Hotel</label>
                        <input type="text" name="nama_hotel" class="form-control"  placeholder="Nama Hotel"value="{{ $hot->nama_hotel}}">
                    </div>
                        <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Alamat</label>
                        <input type="text" name="alamat" class="form-control"placeholder="Alamat"value="{{ $hot->alamat}}">
                    </div>
                        <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Jumlah Kamar</label>
                        <input type="text" name="jumlah_kamar" class="form-control" placeholder="Jumlah Kamar"value="{{ $hot->jumlah_kamar}}">
                            </div>
                            <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Harga</label>
                        <input type="text" name="harga" class="form-control"placeholder="Harga"value="{{ $hot->harga}}">
                        </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">ubah data</button>
                    </form>
                  </div>
                </div>      
            </div>
@endsection