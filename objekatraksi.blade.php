@extends('template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Data Objek Atraksi</h4>

                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                <div class="card-body">
                                        <div class="demo-inline-spacing">
                                            <a href="/tambah-objekatraksi">
                                            <button type="button" class="btn btn-primary">+ Add New</button>
                                            </a>
                                           <a target="_blank" href="{{ url('export-fasilitas')}}">
                                           <button class="btn btn-success" type="button">Cetak PDF</button>
                                          </a>
                                            </div>
                                        <div class="card-body">
                                         <table class="table table-bordered">
                                         <table class="table">
                                        <tr>
                                        <th >Nama Tempat Wisata</th>
                                        <th >Nama Objek</th>
                                        <th >Harga Masuk</th>
                                        <th >Deskripsi</th>
                                        <th >Action</th>
                                 </tr>
                                 @foreach ($data as $item)
                                </tr>
                                <td>{{ $item->id_tempatwisata }}</td>
                                <td>{{ $item->nama_objek}}</td>
                                <td>{{ $item->harga_masuk}}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>
                                <a href="{{ url('edit-objekatraksi', $item->id) }}" class="btn btn-info" type="button"><i class="bx bx-edit"></i></a> 
                                <a href= "{{ url('delete-objekatraksi', $item->id) }}"class="btn btn-danger" type="submit"><i class="bx bx-trash"></i>
                                </td>
                                </tr>
                             @endforeach
                             </tbody>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>  
            </div>
@endsection