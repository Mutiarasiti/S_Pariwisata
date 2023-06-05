<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\JenisHotel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Session;

class HotelController extends Controller
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
            $data = Hotel::all();
            return view('hotel/hotel', compact('data'));
        }
    }
    public function tambah()
    {
        return view('hotel/tambah-hotel');
    }

    public function insert(Request $request)
    {
        $penilaian = new hotel($request->all());
        $penilaian->save();
        return redirect()->route('hotel');
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
            return view('hotel/tambah-hotel', $data);
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
        Hotel::create([
            'id_hotel' => $request->id_hotel,
            'id_jenishotel' => $request->id_jenishotel,
            'nama_hotel' => $request->nama_hotel,
            'alamat' => $request->alamat,
            'jumlah_kamar' => $request->jumlah_kamar,
            'harga' => $request->harga,
        ]);
         return redirect("hotel");
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
        $hot = Hotel::findorfail($id);
        return view('hotel.Edit-hotel', compact('hot'));
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
        $hot = Hotel::findorfail($id);
        $hot->update($request->all());
        return redirect('hotel')->with('toast_success','Data Berhasil Update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Hotel::find($id);
        $data->delete();
        return redirect("hotel")->with("message", "Data berhasil dihapus");
    }

public function export()
  {
    $hotel = Hotel::all();
    $pdf = PDF::loadview('hotel.export-hotel',compact('hotel'));
    return $pdf->download('hotel.pdf');
  }
}