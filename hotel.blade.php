@extends('template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Data Hotel</h4>

                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                <div class="card-body">
                                        <div class="demo-inline-spacing">
                                            <a href="/tambah-hotel">
                                            <button type="button" class="btn btn-primary">+ Add New</button>
                                           </a>
                                           <a target="_blank" href="{{ url('export-hotel')}}">
                                           <button class="btn btn-success" type="button">Cetak PDF</button>
                                          </a>
                                            </div>
                                        <div class="card-body">
                                         <table class="table table-bordered">
                                         <table class="table">
                                        <tr>
                                        <th >Nama Hotel</th>
                                        <th >Jenis Hotel</th>
                                        <th >Nama Hotel</th>
                                        <th >Alamat</th>
                                        <th >Jumlah Kamar</th>
                                        <th >Harga</th>
                                        <th >Action</th>
                                 </tr>
                                 @foreach ($data as $item)
                                </tr>
                                <td>{{ $item->id_hotel }}</td>
                                <td>{{ $item->id_jenishotel }}</td>
                                <td>{{ $item->nama_hotel }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->jumlah_kamar }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>
                                <a href="{{ url('edit-hotel', $item->id) }}" class="btn btn-info" type="button"><i class="bx bx-edit"></i></a> 
                                <a href= "{{ url('delete-hotel', $item->id) }}"class="btn btn-danger" type="submit"><i class="bx bx-trash"></i>
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