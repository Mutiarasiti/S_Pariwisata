<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\KriteriaHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KriteriaHotelController extends Controller
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
            $data = kriteriahotel::all();
            return view('kriteriahotel/kriteriahotel', compact('data'));
        }
    }
    public function tambah()
    {
        return view('kriteriahotel/tambah-kriteriahotel');
    }

    public function insert(Request $request)
    {
        $kriteriahotel = new kriteriahotel($request->all());
        $kriteriahotel->save();
        return redirect()->route('kriteriahotel');
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
            $data['hotel'] = Hotel::all();
            return view('kriteria-hotel/tambah-kriteria-hotel', $data);
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
        KriteriaHotel::create([
            'id_hotel' => $request->id_hotel,
            'jenis_hotel' => $request->jenis_hotel,
            'komentar' => $request->komentar,
        ]);
         return redirect("kriteria-hotel");
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
        $KRI = KriteriaHotel::findorfail($id);
        return view('kriteriahotel.Edit-kriteriahotel', compact('kri'));
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
        $kri = KriteriaHotel::findorfail($id);
        $kri->update($request->all());
        return redirect('kriteriahotel')->with('toast_success','Data Berhasil Update');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
