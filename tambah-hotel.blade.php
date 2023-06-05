@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Tambah Data Hotel</h5>
            <div class="card-body">
                <form action="{{ route('hotel.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Hotel</label>
                        <input type="text" name="id_hotel" class="form-control" id="basic-default-fullname"
                            placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Jeni Hotel</label>
                        <input type="text" name="id_jenishotel" class="form-control" id="basic-default-fullname"
                            placeholder="">
                <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Hotel</label>
                        <input type="text" name="nama_hotel" class="form-control" id="basic-default-fullname"
                            placeholder="">
                    </div>
                        <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="basic-default-fullname"
                            placeholder="">
                    </div>
                        <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Jumlah Kamar</label>
                        <input type="text" name="jumlah_kamar" class="form-control" id="basic-default-fullname"
                            placeholder="">
                            </div>
                            <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Harga</label>
                        <input type="text" name="harga" class="form-control" id="basic-default-fullname"
                            placeholder="">
                            </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>      
            </div>
@endsection