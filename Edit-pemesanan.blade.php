@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Edit Pemesanan</h5>
            <div class="card-body">
                <form action="{{ url('update-pemesanan',$fas->id)}}"method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Objek Atraksi</label>
                        <input type="text" name="id_objek_atraksi" class="form-control" placeholder="Nama Objek Atraksi"value="{{ $fas->id_objek_atraksi}}">
                    </div>
                <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama"value="{{ $fas->nama}}">
                    </div>
                        <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat"value="{{ $fas->alamat}}">
                    </div>
                        <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Tgl Pemesanan</label>
                        <input type="date" name="tgl_pemesanan" class="form-control"placeholder="Tgl Pemesanan"value="{{ $fas->tgl_pemesanan}}">
                        </div>
                        <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>      
            </div>
@endsection