@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Tambah Fasilitas</h5>
            <div class="card-body">
                <form action="{{ route('fasilitas.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Tempat Wisata</label>
                        <input type="text" name="id_tempatwisata" class="form-control" id="basic-default-fullname"
                            placeholder="">
                    </div>
                <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama</label>
                        <input type="text" name="nama" class="form-control" id="basic-default-fullname"
                            placeholder="">
                    </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>      
            </div>
@endsection