@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Tambah Pemesanan</h5>
            <div class="card-body">
                <form action="{{ route('pemesanan.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Objek Atraksi</label>
                        <input type="text" name="id_objek_atraksi" class="form-control" id="basic-default-fullname"
                            placeholder="">
                    </div>
                <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama</label>
                        <input type="text" name="nama" class="form-control" id="basic-default-fullname"
                            placeholder="">
                    </div>
                        <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="basic-default-fullname"
                            placeholder="">
                    </div>
                        <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Tgl Pemesanan</label>
                        <input type="date" name="tgl_pemesanan" class="form-control" id="basic-default-fullname"
                            placeholder="">
                            </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>      
            </div>
@endsection