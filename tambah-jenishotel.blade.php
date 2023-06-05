@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Tambah Jenis Hotel</h5>
            <div class="card-body">
                <form action="{{ route('jenis-hotel.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Hotel</label>
                        <input type="text" name="id_hotel" class="form-control" id="basic-default-fullname"
                            placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Jenis Hotel</label>
                        <input type="text" name="jenis_hotel" class="form-control" id="basic-default-fullname"
                            placeholder="">
                    </div>
                <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="basic-default-fullname"
                            placeholder="">
                            </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>      
            </div>
@endsection