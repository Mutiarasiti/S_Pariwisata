@extends('template')
@section('content')
<div class="card">
            <h5 class="card-header">Tambah Data Pegawai</h5>
            <div class="card-body">
                <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} 
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
                        <label class="form-label" for="basic-default-fullname">No Hp</label>
                        <input type="text" name="no_hp" class="form-control" id="basic-default-fullname"
                            placeholder="">
                    </div>
                        <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Username</label>
                        <input type="date" name="username" class="form-control" id="basic-default-fullname"
                            placeholder="">
                            </div>
                            <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Password</label>
                        <input type="date" name="password" class="form-control" id="basic-default-fullname"
                            placeholder="">
                            </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>      
            </div>
@endsection