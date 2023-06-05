@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Tambah Kriteria Hotel</h5>
            <div class="card-body">
                <form action="{{ url('update-kriteriahotel',$kri->id)}}"method="POST" enctype="multipart/form-data">
                {{ csrf_field() }} 
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Hotel</label>
                        <input type="text" name="id_hotel" class="form-control" id="basic-default-fullname"placeholder="Nama Hotel"value="{{ $kri->id_hotel}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Jenis Hotel</label>
                        <input type="text" name="jenis_hotel" class="form-control"placeholder="Jenis Hotel"value="{{ $kri->jenis_hotel}}">
                    </div>
                <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Komentar</label>
                        <input type="text" name="komentar" class="form-control"placeholder="Komentar"value="{{ $kri->komentar}}">
                            </div>
                       <div class="form-group">
                      <button type="submit" class="btn btn-primary">ubah data</button>
                    </form>
                  </div>
                </div>      
            </div>
@endsection