<?php

namespace App\Http\Controllers;

use App\Models\JenisHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JenisHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Session::get('logged_in_pegawai')) {
            return redirect('login');
        } else {
            $data = JenisHotel::all();
            return view('jenishotel/jenishotel', compact('data'));
        }
    }
    public function tambah()
    {
        return view('jenishotel/tambah-jenishotel');
    }

    public function insert(Request $request)
    {
        $jenishotel = new jenishotel($request->all());
        $jenishotel->save();
        return redirect()->route('jenishotel');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Session::get('logged_in_pegawai')) {
            return redirect('login');
        } else {
            return view('jenishotel/tambah-jenishotel');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JenisHotel::create([
            'id_hotel' => $request->id_hotel,
            'jenis_hotel' => $request->jenis_hotel,
            'deskripsi' => $request->deskripsi,
        ]);
         return redirect("jenis-hotel");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jen = JenisHotel::findorfail($id);
        return view('jenishotel.Edit-jenishotel', compact('jen'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jen = JenisHotel::findorfail($id);
        $jen->update($request->all());
        return redirect('jenishotel')->with('toast_success','Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = JenisHotel::find($id);
        $data->delete();
        return redirect("jenishotel")->with("message", "Data berhasil dihapus");
    }
}