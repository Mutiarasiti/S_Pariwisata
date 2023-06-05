<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KamarController extends Controller
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
            return view('kamar/kamar', compact('data'));
        }
    }
    public function tambah()
    {
        return view('kamar/tambah-kamar');
    }

    public function insert(Request $request)
    {
        $kamar = new hotel($request->all());
        $kamar->save();
        return redirect()->route('kamar');
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
            return view('kamar/tambah-kamar');
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
            'tipe_kamar' => $request->tipe_kamar,
            'no_kamar' => $request->no_kamar,
            'nama_kamar' => $request->nama_hotel,
            'jumlah_kamar' => $request->jumlah_kamar,
        ]);
         return redirect("kamar");
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
        //
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
        //
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
